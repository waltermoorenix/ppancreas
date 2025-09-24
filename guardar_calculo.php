<?php
$host = "localhost";
$user = "root";
$password = ""; // ou a tua password
$dbname = "calculadora_insulina";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die("Erro de ligação: " . $conn->connect_error);
}

$glicose = $_POST['glicose'];
$refeicao = $_POST['refeicao'] === 's' ? 1 : 0;
$hidratos = $_POST['hidratos'];
$unidades = $_POST['unidades'];
$data_hora = date('Y-m-d H:i:s');

$sql = "INSERT INTO historico (glicose, refeicao, hidratos, unidades, data_hora)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("diiis", $glicose, $refeicao, $hidratos, $unidades, $data_hora);
$stmt->execute();

echo "OK";

$stmt->close();
$conn->close();
?>
