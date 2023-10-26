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

// Obtener los datos del formulario
$telefono = $_POST['fono'];
$completo = $_POST['leto'];
$contraseña = $_POST['seña'];

// Crear la consulta SQL para insertar los datos
$sql="INSERT INTO `registro`(` telefono`, `nombrecompleto`, `contraseña`) VALUES ('','$completo','$contraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?> 


