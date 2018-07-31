<?php
$Id_cliente = $_GET['Id_cliente'];

try{
require_once ('conexion.php');
$sql="delete from CLIENTE where Id_cliente = $Id_cliente"; 
$result=$conn->query($sql);
}
catch (Exception $e){
    $error = $e->getMessage();
}
header("Location: eliminarcliente.php");
?>


