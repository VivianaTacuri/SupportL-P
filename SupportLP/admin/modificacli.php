<?php
$Id_cliente = $_GET['Id_cliente'];
$identificacion = $_GET['identificacion'];
$clave = $_GET['clave'];
$id_usuario = $_GET['id_usuario'];
$nombre = $_GET['nombre'];
$direccion = $_GET['direccion'];
$email = $_GET['email'];
$tipo = $_GET['tipo'];
$telefono = $_GET['telefono'];

try{
require_once ('conexion.php');
$sql="UPDATE CLIENTE SET identificacion = '$identificacion', clave = '$clave', id_usuario = '$id_usuario', nombre = '$nombre', direccion = '$direccion', email = '$email', tipo = '$tipo', telefono = '$telefono' where Id_cliente = '$Id_cliente'";
$result=$conn->query($sql); 
}
catch (Exception $e){
    $error = $e->getMessage();
}
header("Location: modificarcliente.php");
?>

