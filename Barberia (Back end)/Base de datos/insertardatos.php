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

$telefono = $_POST["tel"];

$nombres = $_POST["ombres"];

$Pelu = $_POST["names"];

$corte = $_POST["peinados"];

$pagos= $_POST["pagos"];


// Insertar los datos en la base de datos
$sql="INSERT INTO `turnos`(`celular`, `Nombre completo`, `Nombre Peluqueros`, `Servicios`, `Fecha`, `Hora`, `Total a pagar`) VALUES ('$telefono','$nombres','$Pelu','$corte','$meses','$horarios','$pagos')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error:al conectar " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>


