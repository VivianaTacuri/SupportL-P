<?php
session_start();
require_once('conexion.php');
$login=$_POST["username"];
$clave=$_POST["password"];
$tip=$_POST["tipo"];
if(isset($login)&&isset($clave)&&isset($tip))
{
    try
    {
        require_once 'conexion.php';
        $sql = "select * from USUARIO where(credencial='$login' and clave='$clave' and tipo='$tip')";
        $result=$conecta->query($sql);
    } catch (Exception $exc)
    {
        $error= $exc->getMessage();
    }
    $row=$result->fetch_array();
    if(($row['credencial']==$login) && ($row['clave']==$clave) && ($row['tipo']==$tip))
    {
        $_SESSION["registrada"]="administrador";
        $_SESSION["id"]=$row['nombre']; 
        $_SESSION["id2"]=$row['credencial']; 
        $_SESSION["idVendedor"]=$row['tipo'];
        header("Location:admin/admin.php");
    }
    else
    {
        if(($row['credencial']==$login) && ($row['clave']==$clave) && ($row['tipo']==$tip))
        {
            $_SESSION["registrada"]="socio";
            $_SESSION["id"]=$row['nombre']; 
            $_SESSION["id2"]=$row['credencial']; 
            $_SESSION["idVendedor"]=$row['tipo'];
            header("Location:socio/socio.php");
        }
        else
        {
            if(($row['credencial']==$login) && ($row['clave']==$clave) && ($row['tipo']==$tip))
            {
                $_SESSION["registrada"]="vendedor";
                $_SESSION["id"]=$row['nombre']; 
                $_SESSION["id2"]=$row['credencial'];
                $_SESSION["idVendedor"]=$row['tipo']; 
                header("Location:vendedor/vendedor.php");
            }
            else
            {
                header("Location:index.php?error=TRUE");
            }
        }
    }
}
else
{
    session_unset();
    session_destroy();
}
?>