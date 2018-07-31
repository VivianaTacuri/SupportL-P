<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      
        <title></title>
    </head>
    <body>
        <?php
        
        $id_usuario=$_GET['id_usuario'];

        
        try{
        require_once 'conexion.php';
        $sql="select* from USUARIO where id_usuario=$id_usuario";
        $result=$conecta->query($sql);
        $datos=$result->fetch_assoc();
        } catch (Exception $exc){
            $error=$exc->getMessage();
        }
        
        
        ?>
        
        <form action="actualizausu.php" method="post">
            <table>
                
                <TD>Credencial:</TD><TD><INPUT TYPE="text" NAME="credencial" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['credencial'];?>"></TD></TR>
<TR><TD>Clave:</TD><TD><INPUT TYPE="text" NAME="clave" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['clave'];?>"></TD></TR>
<TR><TD>nombre:</TD><TD><INPUT TYPE="text" NAME="nombre" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['nombre'];?>"></TD></TR>
<TR><TD>telefono:</TD><TD><INPUT TYPE="text" NAME="telefono" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['telefono'];?>"></TD></TR>
<TR><TD>direccion:</TD><TD><INPUT TYPE="text" NAME="direccion" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['direccion'];?>"></TD></TR>
<TR><TD>Email:</TD><TD><INPUT TYPE="text" NAME="email" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['email'];?>"></TD></TR>
<TR><TD>Tipo:</TD><TD><select TYPE="tipo" NAME="tipo" required value="<?php echo $datos['tipo'];?>">
        <option selected></option>
        <option selected>administrador</option>
        <option selected>trabajador</option>
        </select>
</TD>
</TR>
                
            </table>
            <INPUT TYPE="submit" NAME="accion" VALUE="actualizausu">
            <input type="hidden" name="id_usuario" value="<?= $datos['id_usuario'];?>">
            </form>
        
        
    </body>
</html>