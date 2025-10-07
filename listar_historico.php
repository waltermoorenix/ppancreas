
<?php
$host = "tb-be04-linweb086.srv.teamblue-ops.net";
$user = "cybewo_cyberstationpt";          
$password = "Vl1991239!";                
$dbname = "cybewo_historico";            

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die("Erro de ligação: " . $conn->connect_error);
}

// Parâmetros de paginação
$pagina = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1;
$limite = isset($_GET['limite']) ? intval($_GET['limite']) : 10;
$offset = ($pagina - 1) * $limite;

// Consulta paginada
$sql = "SELECT * FROM historico ORDER BY data_hora DESC LIMIT $limite OFFSET $offset";
$result = $conn->query($sql);

$historico = [];
while ($row = $result->fetch_assoc()) {
  $historico[] = $row;
}

echo json_encode($historico);

$conn->close();
?>