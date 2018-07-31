<?php
  $id_servicio = $_GET['id_servicio'];
  $descripcion = $_GET['descripcion'];
  $tipo =$_GET['tipo'];
  try {
    requiere_once('conexion.php');
    $sql ="update SERVICIO set descripcion='$descripcion', tipo='$tipo' where(id_servicio=$id_servicio)";
    $result = $conn->query($sql);
  } catch (Exception $e) {
    $error = $e->getMessage();
  }
  header("Location:ModificarRegistroServicio.php");
?>
