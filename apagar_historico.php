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

$sql = "DELETE FROM historico";
if ($conn->query($sql) === TRUE) {
  echo "Histórico apagado com sucesso.";
} else {
  echo "Erro ao apagar histórico: " . $conn->error;
}

$conn->close();
?>
