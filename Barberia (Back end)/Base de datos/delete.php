<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "barberia";

// Crear la conexión con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$celular=$_POST["magia"];

$sql =("DELETE FROM turnos WHERE celular = '$celular'");



if ($conn->query($sql) === TRUE) {
  echo "Registro eliminado con éxito";
} else {
  echo "Error eliminando registro: " . $conn->error;
}


?>