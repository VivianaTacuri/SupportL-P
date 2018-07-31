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
        $credencial=$_POST['credencial'];
        $clave=$_POST['clave'];
        $nombre=$_POST['nombre'];
        $telefono=$_POST['telefono'];
        $direccion=$_POST['direccion'];
        $email=$_POST['email'];
        $tipo=$_POST['tipo'];
        
        try{
        require_once 'conexion.php';
        $sql="insert into USUARIO(credencial,clave,nombre,telefono,direccion,email,tipo)values('$credencial','$clave','$nombre','$telefono','$direccion','$email','$tipo')";
        $result=$conecta->query($sql);
        } catch (Exception $exc){
            $error=$exc->getMessage();
        }
        header("Location: agregausuario.php");
        
        ?>
    </body>
</html>
