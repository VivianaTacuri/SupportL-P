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
        <div>
            <form action="agregausu.php" method="post">
            <table>
                <TR>
                   <TD>Credencial:</TD><TD><INPUT TYPE="text" NAME="credencial" SIZE="20" MAXLENGTH="30"></TD></TR>
<TR><TD>Clave:</TD><TD><INPUT TYPE="text" NAME="clave" SIZE="20" MAXLENGTH="30"></TD></TR>
<TR><TD>nombre:</TD><TD><INPUT TYPE="text" NAME="nombre" SIZE="20" MAXLENGTH="30"></TD></TR>
<TR><TD>telefono:</TD><TD><INPUT TYPE="text" NAME="telefono" SIZE="20" MAXLENGTH="30"></TD></TR>
<TR><TD>direccion:</TD><TD><INPUT TYPE="text" NAME="direccion" SIZE="20" MAXLENGTH="30"></TD></TR>
<TR><TD>Email:</TD><TD><INPUT TYPE="text" NAME="email" SIZE="20" MAXLENGTH="30"></TD></TR>
<TR><TD>Tipo:</TD><TD><select TYPE="tipo" NAME="tipo" required>
        <option selected></option>
        <option selected>administrador</option>
        <option selected>trabajador</option>
        </select>
</TD>
</TR>
                
</table>
<INPUT TYPE="submit" NAME="agregausu.php" VALUE="Grabar">
            </form>
            
        </div>
        

    </body>
</html>
