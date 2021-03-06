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
<head>
        <meta charset="utf-8"/>
        <meta name="description" content="support l&P"/>
        <meta name="keywords" content="HTML, CSS3, Javascript"/>
        <title>ADMINISTRADOR</title>
        <link rel="icon" href="img/icono_aris.ico"/>
        <link rel="stylesheet" href="css/estiloadministrador.css"/>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body> 
	<div id="pre-header">
            <div id="telefono">
                <span>+593 022 906 865</span>
            </div>        
            <div id="email">
                <span>soportecontablelp@gmail.com</span>
            </div>
            <div class="nombreusuario">
                <a class="link" href="admin.php"><span>  <<           &#128100;                   Administrador: <?php echo ($id)." ".($id2) ?></span></a>
            </div>
        </div>
        <header>
            <div id="logo">
                <h1><b>SUPPORT L&P</b></h1>
                <h3><b></b></h3>
            </div>
            <div id="visitanos"><br>
                <h3 id="barra">EN CONSTANTE RENOVACIÓN</h3>
                <p>"support L&P servicios contables y tributarios "</p>
            </div>
            <div class="menu">
            <nav>
                <ul>
                    <li><a href="">USUARIOS</a>
                        <div class="doc">
                            <ul>
                                <li color="black"><a href="registrarusuario.php"><img src="img/userr1.png" width="50" height="50"><br>AGREGAR REGISTRO USUARIO</a></li>
                                <li><a href="modificadorusuario.php"><img src="img/modifica.png" width="50" height="50"><br>MODIFICAR DATOS USUARIO</a></li>
                                <li><a href="elimina_trabajador.php"><img src="img/borra.png" width="50" height="50"><br>ELIMINAR USUARIO</a></li>
                                <li><a href="buscar_trabajador.php"><img src="img/busca.png" width="50" height="50"><br>BUSCAR USUARIO</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">CLIENTES</a>
                        <div class="doc">
                            <ul>
                                <li><a href="registrar_cliente.php"><img src="img/userr1.png" width="50" height="50"><br>AGREGAR REGISTRO CLIENTE</a></li>
                                <li><a href="modifica_cliente.php"><img src="img/modifica.png" width="50" height="50"><br>MODIFICAR DATOS CLIENTE</a></li>
                                <li><a href="elimina_cliente.php"><img src="img/borra.png" width="50" height="50"><br>ELIMINAR CLIENTE</a></li>
                                <li><a href="busca_cliente.php"><img src="img/busca.png" width="50" height="50"><br>BUSCAR CLIENTE</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">SERVICIOS</a>
                        <div class="doc">
                            <ul>
                                <li><a href="registrarproducto.php"><img src="img/userr1.png" width="50" height="50"><br>AGREGAR REGISTRO SERVICIO</a></li>
                                <li><a href="modifica_producto.php"><img src="img/modifica.png" width="50" height="50"><br>MODIFICAR DATOS SERVICIO</a></li>
                                <li><a href="elimina_producto.php"><img src="img/borra.png" width="50" height="50"><br>ELIMINAR SERVICIO</a></li>
                                <li><a href="busca_producto.php"><img src="img/busca.png" width="50" height="50"><br>BUSCAR SERVICIO</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="stock.php">PRESTACIONES</a>
                        <div class="doc">      
                        <ul>
                                <li><a href="registrarproducto.php"><img src="img/userr1.png" width="50" height="50"><br>GENERAR PRESTACION</a></li>
                                <li><a href="modifica_producto.php"><img src="img/modifica.png" width="50" height="50"><br>MODIFICAR PRESTACION</a></li>
                                <li><a href="elimina_producto.php"><img src="img/borra.png" width="50" height="50"><br>ELIMINAR PRESTACION</a></li>
                                <li><a href="busca_producto.php"><img src="img/busca.png" width="50" height="50"><br>BUSCAR PRESTACION</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">REPORTES</a>
                        <div class="doc">
                            <ul>
                                <li><a href="ReporteRutas.php"><img src="img/userr1.png" width="50" height="50"><br>REPORTE 1</a></li>
                                <li><a href="ReporteGanancias.php"><img src="img/userr1.png" width="50" height="50"><br>REPORTE 2</a></li>
                                <li><a href="reporteF.php"><img src="img/userr1.png" width="50" height="50"><br>VENTAS 3</a></li>
                                <li><a href="reporteB.php"><img src="img/userr1.png" width="50" height="50"><br>SALIDA 4</a></li>
                            </ul>
                        </div>
                    </li>
                   
                    <li><a href="../cerrar_sesion.php">CERRAR SESIÓN</a></li>
		</ul>
            </nav>
            </div>
        </header>
        <hr>
             <article>
                   &#128100; BIENVENIDO A LA ADMINISTRACIÓN
             </article>
        <footer>
            <hr align="center" width="100%" size="1">
            <p>&COPY; SUPPORT L&P. Todos los derechos reservados - 2018<br>Riobamba - Ecuador</p>
        </footer>	
    </body>
</html>