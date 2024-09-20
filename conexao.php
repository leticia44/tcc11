<?php
$servername = "localhost";
$username = "root"; // ou o seu usuário do MySQL
$password = ""; // ou a sua senha do MySQL
$dbname = "cadastro"; // nome do seu banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
