<?php
include("Conexion.php");


if(isset($_POST['Contra'])){
    if(strlen($_POST['id'])) >= 1 && 
  (strlen($_POST['name'])) >= 1 && {
    $name = trim($_POST['name']);
    $id   = trim($_POST['id']) ;
    $consulta = "INSERT INTO `registro`(`Dni`, `Nombrecompleto`, `Contraseña`) VALUES ('id','name','Contra')"
    $resultado =mysqli_query($conex,$consulta);
    if($resultado){
  ?>
    <h3 class="ok">Te has inscripto correctamente</h3> 
<?php
    }else{
        ?>
    <h3 class="joya">NO te has inscripto correctamente</h3> 
        <?php
    }
}