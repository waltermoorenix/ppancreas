<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "calculadora_insulina";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die("Erro de ligação: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM historico ORDER BY data_hora DESC");

$historico = [];
while ($row = $result->fetch_assoc()) {
  $historico[] = $row;
}

echo json_encode($historico);

$conn->close();
?>
