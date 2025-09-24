<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "calculadora_insulina";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die("Erro de ligação: " . $conn->connect_error);
}

$sql = "DELETE FROM historico";
if ($conn->query($sql) === TRUE) {
  echo "Histórico apagado com sucesso.";
} else {
  echo "Erro ao apagar histórico: " . $conn->error;
}

$conn->close();
?>
