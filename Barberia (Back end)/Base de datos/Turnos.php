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

// Turnos,peluqueros,servicios formularios
$horarios = $_POST["horas"];
$meses = $_POST["meses"];
$telefono = $_POST["tele"];
$nombres = $_POST["ombre"];
$Pelu = $_POST["nombres"];
$corte = $_POST["cortes"];
$pagos= $_POST["pagar"];



// Crear la consulta SQL para insertar los datos
$sql="INSERT INTO `turnos`(`celular`, `Nombre completo`, `Nombre Peluqueros`, `Servicios`, `Fecha`, `Hora`, `Total a pagar`) VALUES ('$telefono','$nombres','$Pelu','$corte','$meses','$horarios','$pagos')";


// Asignar el valor del parámetro y ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $conn->error;
}
// Cerrar la sentencia preparada y la conexión
$conn->close();
