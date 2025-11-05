<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Dados do alojamento
$host = "";
$user = "";          utilizador MySQL
$password = "";                 //password MySQL
$dbname = "";             //nome exato da base de dados

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die("Erro de ligação: " . $conn->connect_error);
} else {
  echo "Ligação bem-sucedida!";
}
?>
