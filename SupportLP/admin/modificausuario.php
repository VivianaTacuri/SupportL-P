<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
           
        <hr margin='5'>
        <?php
        try {
            require_once 'conexion.php';
            $sql="select * from USUARIO";
            $result=$conecta->query($sql);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
                ?>
        <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
<TR>
<TD>&nbsp;credencial</TD>
<TD>&nbsp;clave&nbsp;</TD>
<TD>&nbsp;nombre&nbsp;</TD>
<TD>&nbsp;telefono&nbsp;</TD>
<TD>&nbsp;direccion&nbsp;</TD>
<TD>&nbsp;email&nbsp;</TD>
<TD>&nbsp;tipo&nbsp;</TD>
<TD>&nbsp;modifii&nbsp;</TD>
</TR>

        <?php
        while($row=$result->fetch_array()) {
printf("<tr>
    <td>&nbsp;%s</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td><a href=\"modificausu.php?id_usuario=%d\">modificar</a></td>
    </tr>",
$row["credencial"],$row["clave"],$row["nombre"],$row["telefono"],$row["direccion"],$row["email"],$row["tipo"],$row["id_usuario"]);
}
$result->close();
$conn->close();
        ?>
</table>
    </body>
</html>