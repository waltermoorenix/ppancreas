<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Dados do alojamento
$host = "";
$user = "";          
$password = "";              
$dbname = "";            

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die("Erro de ligação: " . $conn->connect_error);
} else {
  echo "Ligação bem-sucedida!";
}
?>
