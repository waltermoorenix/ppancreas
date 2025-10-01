<?php
// Dados reais do teu alojamento
$host = "tb-be04-linweb086.srv.teamblue-ops.net";
$user = "cybewo_cyberstationpt";          // o teu utilizador MySQL
$password = "Vl1991239!";                 // a tua password MySQL
$dbname = "cybewo_historico";             // substitui pelo nome exato da base de dados

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
