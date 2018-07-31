<html>
<head>
<title>Modificar Datos - Cliente</title>
</head>
<body>

<?php
$Id_cliente = $_GET['Id_cliente'];
try{
require_once ('conexion.php');
$sql = "select * from CLIENTE where Id_cliente=$Id_cliente";
$result=$conn->query($sql);
$datos = $result->fetch_assoc();
}
catch(Exception $e){
    $error = $e->getMessage();
}
?>
<H1>Modificar Datos - Cliente</H1>
<FORM method ="GET" ACTION="modificacli.php">
<TABLE>
    <TR>
<TD>Identificacion:</TD>
<TD><INPUT TYPE="text" NAME="identificacion" SIZE="20"
MAXLENGTH="30" value="<?php echo $datos['identificacion'];?>"></TD>
</TR>
<TR>
<TD>Clave:</TD>
<TD><INPUT TYPE="text" NAME="clave" SIZE="20"
MAXLENGTH="30" value="<?php echo $datos['clave'];?>"></TD>
</TR>
<TR>
<TD>Id_Usuario:</TD>
<TD><INPUT TYPE="text" NAME="id_usuario" SIZE="20"
MAXLENGTH="30" value="<?php echo $datos['id_usuario'];?>"></TD>
</TR>
<TR>
<TD>Nombre:</TD>
<TD><INPUT TYPE="text" NAME="nombre" SIZE="20"
MAXLENGTH="30" value="<?php echo $datos['nombre'];?>"></TD>
</TR>
<TR>
<TD>Direccion:</TD>
<TD><INPUT TYPE="text" NAME="direccion" SIZE="20"
MAXLENGTH="30" value="<?php echo $datos['direccion'];?>"></TD>
</TR>
<TR>
<TD>Email:</TD>
<TD><INPUT TYPE="text" NAME="email" SIZE="20"
MAXLENGTH="30" value="<?php echo $datos['email'];?>"></TD>
</TR>
<TR>
<TD>Tipo:</TD>
<TD><INPUT TYPE="text" NAME="tipo" SIZE="20"
MAXLENGTH="30" value="<?php echo $datos['tipo'];?>"></TD>
</TR>
<TR>
<TD>Telefono:</TD>
<TD><INPUT TYPE="text" NAME="telefono" SIZE="20"
MAXLENGTH="30" value="<?php echo $datos['telefono'];?>"></TD>
</TR>
</TABLE>
<INPUT TYPE="submit" NAME="accion" VALUE="Modificar">
<INPUT TYPE="hidden" NAME="Id_cliente" VALUE="<?= $datos['Id_cliente']; ?>">
</FORM>
</body>
</html>
