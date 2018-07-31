<?php
$identificacion = $_POST[identificacion];
$clave = $_POST[clave];
$id_usuario = $_POST[id_usuario];
$nombre = $_POST[nombre];
$direccion = $_POST[direccion];
$email = $_POST[email];
$tipo = $_POST[tipo];
$telefono = $_POST[telefono];

try{
require_once ('conexion.php');
$sql="insert into CLIENTE (identificacion, clave, id_usuario, nombre, direccion, email, tipo, telefono) 
        values ('$identificacion','$clave','$id_usuario','$nombre','$direccion','$email','$tipo','$telefono')";
$result=$conn->query($sql); 
echo $sql;
}
catch (Exception $e){
    $error = $e->getMessage();
}
header("Location: insertareg.php");
?>
