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



$horarios = $_POST["oras"];
$meses = $_POST["mes"];
$telefono = $_POST["cel"];
$nombres = $_POST["ombres"];
$Pelu = $_POST["names"];
$corte = $_POST["peinados"];
$pagos= $_POST["pagos"];

// Crear la consulta SQL de actualización
$sql = "UPDATE `turnos` SET `celular`='$telefono', `Nombre completo`='$nombres', `Nombre Peluqueros`='$Pelu', `Servicios`='$corte', `Fecha`='$meses', `Hora`='$horarios', `Total a pagar`='$pagos' WHERE celular='$telefono'";


// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
  echo "Registro actualizado con éxito";
} else {
  echo "Error actualizando registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();



?>