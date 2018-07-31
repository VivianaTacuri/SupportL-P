<?php
    session_start();
    if(!isset($_SESSION["registrada"]))
    {
        session_unset();
        session_destroy();
        header('Location:../index.php');
    }
    $id=isset($_SESSION["id"]) ? $_SESSION["id"]: NULL;
    $id2=isset($_SESSION["id2"]) ? $_SESSION["id2"]: NULL;
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <meta name="description" content="surtimax"/>
        <meta name="keywords" content="HTML, CSS3, Javascript"/>
        <title>ACTUALIZAR CLIENTE</title>
        <link rel="icon" href="img/icono_aris.ico"/>
        <link rel="stylesheet" href="css/estilo_registrar.css"/>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body> 
	<div id="pre-header">
            <div id="telefono">
                <span>+593 984573207</span>
            </div>        
            <div id="email">
                <span>xxxxxx@xxxxxx.xxxxx</span>
            </div>
            <div class="nombreusuario">
                <a class="link" href="admin.php"><span><< &#128100; Administrador: <?php echo ($id)." ".($id2) ?></span></a>
            </div>
        </div>
        <header>
            <div id="logo">
                <h1><b>MEGA COMERCIAL</b></h1>
                <h1><b>SURTIMAX</b></h1>
            </div>
            <div id="visitanos">
                <h3 id="barra">EN CONSTANTE RENOVACI�0�7N</h3>
                <p>"Ofrece Gran Variedad de V��veres y Bazar de Primera Necesidad"</p>
            </div>
            <div class="menu">
            <nav>
                <ul>
                    <li><a href="">TRABAJADOR</a>
                        <div class="doc">
                            <ul>
                                <li color="black"><a href="registrartrabajador.php"><img src="../img/userr1.png" width="50" height="50"><br>AGREGAR REGISTRO TRABAJADOR</a></li>
                                <li><a href="modifica_trabajador.php"><img src="../img/modifica.png" width="50" height="50"><br>MODIFICAR DATOS TRABAJADOR</a></li>
                                <li><a href="elimina_trabajador.php"><img src="../img/borra.png" width="50" height="50"><br>ELIMINAR TRABAJADOR</a></li>
                                <li><a href="buscar_trabajador.php"><img src="../img/busca.png" width="50" height="50"><br>BUSCAR TRABAJADOR</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">CLIENTES</a>
                        <div class="doc">
                            <ul>
                                <li><a href="registrar_cliente.php"><img src="../img/userr1.png" width="50" height="50"><br>AGREGAR REGISTRO CLIENTE</a></li>
                                <li><a href="modifica_cliente.php"><img src="../img/modifica.png" width="50" height="50"><br>MODIFICAR DATOS CLIENTE</a></li>
                                <li><a href="elimina_cliente.php"><img src="../img/borra.png" width="50" height="50"><br>ELIMINAR CLIENTE</a></li>
                                <li><a href="busca_cliente.php"><img src="../img/busca.png" width="50" height="50"><br>BUSCAR CLIENTE</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">PRODUCTOS</a>
                        <div class="doc">
                            <ul>
                                <li><a href="registrarproducto.php"><img src="../img/userr1.png" width="50" height="50"><br>AGREGAR REGISTRO PRODUCTOS</a></li>
                                <li><a href="modifica_producto.php"><img src="../img/modifica.png" width="50" height="50"><br>MODIFICAR DATOS PRODUCTO</a></li>
                                <li><a href="elimina_producto.php"><img src="../img/borra.png" width="50" height="50"><br>ELIMINAR PRODUCTO</a></li>
                                <li><a href="busca_producto.php"><img src="../img/busca.png" width="50" height="50"><br>BUSCAR PRODUCTO</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="stock.php">STOCK PRODUCTOS</a></li>
                    <li><a href="">REPORTES</a>
                        <div class="doc">
                            <ul>
                                <li><a href="reporte1.php"><img src="../img/userr1.png" width="50" height="50"><br>REPORTE 1</a></li>
                                <li><a href="reporte2.php"><img src="../img/userr1.png" width="50" height="50"><br>REPORTE 2</a></li>
                                <li><a href="reporte3.php"><img src="../img/userr1.png" width="50" height="50"><br>REPORTE 3</a></li>
                                <li><a href="reporte4.php"><img src="../img/userr1.png" width="50" height="50"><br>REPORTE 4</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">VENTAS</a></li>
                    <li><a href="">FACTURA</a></li>
                    <li><a href="../cerrar_sesion.php">CERRAR SESI�0�7N</a></li>
		</ul>
            </nav>
            </div>
        </header>
       
    <div class="contenidoo"><br><br>
	        <img src="img/modifica.png">
	        <h2>MODIFICAR REGISTRO</h2>
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
                
                <TD>Credencial:</TD><TD><INPUT class="input " TYPE="text" NAME="credencial" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['credencial'];?>"></TD></TR>
<TR><TD>Clave:</TD><TD><INPUT class="input" TYPE="text" NAME="clave" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['clave'];?>"></TD></TR>
<TR><TD>nombre:</TD><TD><INPUT class="input" TYPE="text" NAME="nombre" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['nombre'];?>"></TD></TR>
<TR><TD>telefono:</TD><TD><INPUT class="input" TYPE="text" NAME="telefono" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['telefono'];?>"></TD></TR>
<TR><TD>direccion:</TD><TD><INPUT class="input" TYPE="text" NAME="direccion" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['direccion'];?>"></TD></TR>
<TR><TD>Email:</TD><TD><INPUT class="input" TYPE="text" NAME="email" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['email'];?>"></TD></TR>
<TR><TD>Tipo:</TD><TD><select class="input" TYPE="tipo" NAME="tipo" required value="<?php echo $datos['tipo'];?>">
        <option selected></option>
        <option selected>administrador</option>
        <option selected>trabajador</option>
        </select>
</TD>
</TR>
                
            </table>
            <INPUT class="btn_submint" TYPE="submit" NAME="accion" VALUE="ACTUALIZAR USUARIO">
            <input  type="hidden" name="id_usuario" value="<?= $datos['id_usuario'];?>">
            </form>
	    </div>
	    
        <footer>
            <hr align="center" width="100%" size="1">
            <p>&COPY; SURTIMAX. Todos los derechos reservados - 2018<br>Riobamba - Ecuador</p>
        </footer>
    </body>
</html>