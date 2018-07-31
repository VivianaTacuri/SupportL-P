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
      <?php
        $id_usuario=$_POST['id_usuario'];
        $credencial=$_POST['credencial'];
        $clave=$_POST['clave'];
        $nombre=$_POST['nombre'];
        $telefono=$_POST['telefono'];
        $direccion=$_POST['direccion'];
        $email=$_POST['email'];
        $tipo=$_POST['tipo'];
        $sql="UPDATE USUARIO SET credencial='$credencial',clave='$clave',nombre='$nombre', telefono='$telefono',direccion='$direccion',email='$email',tipo='$tipo' WHERE id_usuario=$id_usuario";
        
        try{
        require_once 'conexion.php';
        $sql="UPDATE USUARIO SET credencial='$credencial',clave='$clave',nombre='$nombre', telefono='$telefono',direccion='$direccion',email='$email',tipo='$tipo' WHERE id_usuario=$id_usuario";
        $result=$conecta->query($sql);
        } catch (Exception $exc){
            $error=$exc->getMessage();
        }
        header("Location: modificausuario.php");
        
        ?>
    </body>
</html>