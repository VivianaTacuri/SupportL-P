<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $dato = $_POST['descripcion'];
      try {
        requiere_once('conexion.php');
        $sql = "select * from SERVICIO where descripcion like '%$dato%' ";
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
        $i=0;
        while ($row = $result->fetch_array()) {
          printf(  "<tr>
              <td>&nbsp;%d</td>
              <td>&nbsp;%s</td>
              <td>&nbsp;%s</td>
              <td><a href= \"ActualizarServicio.php?id=%d\">Modificar</a></td>
            </tr>",
            $row["id_servicio"],$row["descripcion"],$row["tipo"],  $row["id_servicio"]
            );
          $i = $i+1;
        }
        $result->close();
        $conn->close();
        if($i==0)
          printf("<p>Datos no encontrados</p>");
      ?>
  </body>
</html>
