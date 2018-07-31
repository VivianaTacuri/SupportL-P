<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eliminar Servicio</title>
  </head>
  <body>
      
    <?php
      try {
        requiere_once('conexion.php');
        $sql = "Select * from SERVICIO";
        $result = $conn->query($sql);
      } catch (Exception $e) {
        $error = $e->getMessage();
      }
    ?>
    <table>
      <tr>
        <td>&nbsp;Id_servicio</td>
        <td>&nbsp;Descripción</td>
        <td>&nbsp;Tipo</td>
      </tr>
      <?php
        while ($row=$result->fetch_array()) {
          printf(
            "<tr>
              <td>&nbsp;%d</td>
              <td>&nbsp;%s</td>
              <td>&nbsp;%s</td>
              <td><a href= \"EliminarServicio.php?id=%d\">Borrar</a></td>
            </tr>",
            $row["id_servicio"],$row["descripcion"],$row["tipo"],  $row["id_servicio"]
            );
        }
        $result->close();
        $conn->close();
      ?>
    </table>
  </body>
</html>
