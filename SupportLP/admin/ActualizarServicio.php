<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $id = $_GET['id_servicio'];
      try {
        requiere_once('conexion.php');
        $sql = "Select * from SERVICIO where id=$id";
        $result = $conn->query($sql);
        $datos = $result->fetch_assoc();
      } catch (Exception $e) {
        $error=$e->getMessage();
      }
    ?>
    <form  action="ModificarServicio.php" method="get">
      <table>
        <tr>
          <td>Descripción: </td>
          <td><input type="text" name="descripcion" value="<?php echo $datos['descripcion'] ; ?>"></td>
        </tr>
        <tr>
          <td>Tipo: </td>
          <td><input type="text" name="tipo" value="<?php echo $datos['tipo']; ?>"></td>
        </tr>
      </table>
      <input type="submit" name="accion" value="Modificar">
      <input type="hidden" name="id" value="<?php $datos['id_servicio']; ?>">
    </form>
  </body>
</html>
