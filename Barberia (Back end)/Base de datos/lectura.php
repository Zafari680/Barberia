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
  
  $celular = $_POST["ingreso"];
 
  $sql = "SELECT * FROM `turnos` WHERE celular = $celular";
  
  $result = $conn->query($sql);


  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["celular"]. " - Name: " . $row["Nombre completo"]. " - Peluquero:  " . $row["Nombre Peluqueros"]. "  Servicios: " . $row["Servicios"]. " - Fecha: " . $row["Fecha"]. "- hora: " . $row["Hora"]. "- Pagos: " .$row["Total a pagar"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();







