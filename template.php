<?php
// Conexão com o banco de dados MySQL
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

//
