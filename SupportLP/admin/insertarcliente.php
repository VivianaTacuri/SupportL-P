<html>
<head>
<title>Ingresar Datos - Cliente</title>
</head>
<body>
    <H1>Ingreso de Datos de Cliente</H1>
<FORM method ="post" ACTION="agregareg.php">
<TABLE>
    <TR>
<TD>Identificacion:</TD>
<TD><INPUT TYPE="text" NAME="identificacion" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
<TR>
<TD>Clave:</TD>
<TD><INPUT TYPE="text" NAME="clave" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
<TR>
<TD>Id_Usuario:</TD>
<TD><INPUT TYPE="text" NAME="id_usuario" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
<TR>
<TD>Nombre:</TD>
<TD><INPUT TYPE="text" NAME="nombre" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
<TR>
<TD>Direccion:</TD>
<TD><INPUT TYPE="text" NAME="direccion" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
<TR>
<TD>Email:</TD>
<TD><INPUT TYPE="text" NAME="email" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
<TR>
<TD>Tipo:</TD>
<TD><INPUT TYPE="text" NAME="tipo" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
<TR>
<TD>Telefono:</TD>
<TD><INPUT TYPE="text" NAME="telefono" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
</TABLE>
<INPUT TYPE="submit" NAME="accion" VALUE="Guardar">
</FORM>
<hr>

<?php
try{
require_once ('conexion.php');
$sql = "select * from CLIENTE";
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
    </tr>
    
    <?php
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
                    </tr>", 
        $row["identificacion"], $row["clave"], $row["id_usuario"], $row["nombre"], $row["direccion"], $row["email"], $row["tipo"], $row["telefono"]);
    }
    $result ->close();
    $conn ->close();
    ?>
    
</table>
</body>
</html>

