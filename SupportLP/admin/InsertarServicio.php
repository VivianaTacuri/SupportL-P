<?php
  $descripcion = $_POST[descripcion];
  $tipo = $_POST[tipo];
  try {
    requiere_once('conexion.php');
    $sql="insert into SERVICIO(descripcion, tipo) values('$descripcion','$tipo')";
    $result = $conecta->query($sql);
  } catch (Exception $exc) {
    $error = $exc->getMessage();
  }
  header("Location: IngresarRegistroServicios.php");
?>
