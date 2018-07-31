<html>
<head>
<title>Buscar Datos - Cliente</title>
</head>
<body>
<H1>Buscar Datos - Cliente</H1>
<?php
$dato = $_POST['identificacion'];
try{
require_once ('conexion.php');
$sql = "select * from CLIENTE where identificacion like '%$dato%'";
$result=$conn->query($sql);
}
catch(Exception $e){
    $error = $e->getMessage();
}
?>

    <table border=1 cellspacing=1 cellpadding=1>
    <tr>
        <td>&nbsp;Identificacion</td>
        <td>&nbsp;Clave&nbsp;</td>
        <td>&nbsp;Id_Usuario&nbsp;</td>
        <td>&nbsp;Nombre&nbsp;</td>
        <td>&nbsp;Direccion&nbsp;</td>
        <td>&nbsp;Email&nbsp;</td>
        <td>&nbsp;Tipo&nbsp;</td>
        <td>&nbsp;Telefono&nbsp;</td>
        <td>&nbsp;Modifica&nbsp;</td>
        <td>&nbsp;Borra&nbsp;</td>
    </tr>
    
    <?php
    $i = 0;
    while($row = $result->fetch_array()){
        printf("<tr>
                    <td>&nbsp;%s</td>
                    <td>&nbsp;%s&nbsp;</td>
                    <td>&nbsp;%s&nbsp;</td>
                    <td>&nbsp;%s&nbsp;</td>
                    <td>&nbsp;%s&nbsp;</td>
                    <td>&nbsp;%s&nbsp;</td>
                    <td>&nbsp;%s&nbsp;</td>
                    <td>&nbsp;%s&nbsp;</td>
                    <td><a href=\"actualizacli.php?Id_cliente=%d\">Modificar</a></td>
                    <td><a href=\"eliminacli.php?Id_cliente=%d\">Borrar</a></td>
                    </tr>", 
        $row["identificacion"], $row["clave"], $row["id_usuario"], $row["nombre"], $row["direccion"], $row["email"], $row["tipo"], $row["telefono"], $row["Id_cliente"], $row["Id_cliente"]);
    
         $i = $i + 1; 
    }
    $result ->close();
    $conn ->close();
    ?>
    
</table>
</body>
</html>