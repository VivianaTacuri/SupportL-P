<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ingresar Servicios</title>
  </head>
  <body>
    <h1>Ingreso  de registro de Servicios</h1>
    <form action="InsertarServicio.php" method="post">
        <table>
          <tr>
            <td>Descripción: </td>
            <td><input type="text" name="descripcion"></td>
          </tr>
          <tr>
            <td>Tipo de Servicio: </td>
            <td><input type="text" name="tipo"></td>
          </tr>
        </table>
        <input type="submit" name="accion" value="Guardar">
    </form>
    <?php
      try {
        requiere_once ('conexion.php');
        $sql = "Select * from SERVICIO";
        $result = $conn->query($sql);

      } catch (Exception $e) {
        $error=$e->getMessage();
      }
    ?>

    <table>
      <tr>
        <td>&nbsp;Descripción</td>
        <td>&nbsp;Tipo</td>
      </tr>
      <?php
        while ($row=$result->fetch_array()) {
          printf(
            "<tr>
              <td>&nbsp;%s</td>
              <td>&nbsp;%s</td>
            </tr>",
            $row["descripcion"],$row["tipo"]
            );
        }
        $result->close();
        $conn->close();
      ?>
    </table>
  </body>
</html>
