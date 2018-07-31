<?php
  $id = $_GET['id_servicio'];
  try {
    requiere_once('conexion.php');
    $sql  = "delete from SERVICIO where id_servicio=$id";
    $result = $conn->query($sql);
  } catch (Exception $e) {
    $error = $e->getMessage();
  }
  header("Location: EliminarRegistroServicios.php");
?>
