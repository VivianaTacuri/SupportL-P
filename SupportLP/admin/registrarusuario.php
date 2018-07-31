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
<head><meta charset="UTF-8"/>
        
        <meta name="description" content="surtimax"/>
        <meta name="keywords" content="HTML, CSS3, Javascript"/>
        <title>REGISTRAR CLIENTE</title>
        <link rel="icon" href="img/icono_aris.ico"/>
        <link rel="stylesheet" href="css/estilo_reg.css"/>
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
                <article class="articlenew">
                <div class="contenido">
                    <img src="../img/userr1.png">
                    <h2>INGRESAR DATOS CLIENTE</h2>
                    <?php
                    if(!isset($_POST["verificar"]))
                    {
                        ?>
                        <form action="agregausu.php" method="post">
            <table>
                <TR>
                    <TD>Credencial:</TD><TD><INPUT class="input" TYPE="text" NAME="credencial" SIZE="20" MAXLENGTH="30"></TD></TR>
                    <TR><TD>Clave:</TD><TD><INPUT class="input" TYPE="text" NAME="clave" SIZE="20" MAXLENGTH="30"></TD></TR>
                    <TR><TD>nombre:</TD><TD><INPUT class="input" TYPE="text" NAME="nombre" SIZE="20" MAXLENGTH="30"></TD></TR>
                    <TR><TD>telefono:</TD><TD><INPUT class="input" TYPE="text" NAME="telefono" SIZE="20" MAXLENGTH="30"></TD></TR>
                    <TR><TD>direccion:</TD><TD><INPUT class="input" TYPE="text" NAME="direccion" SIZE="20" MAXLENGTH="30"></TD></TR>
                    <TR><TD>Email:</TD><TD><INPUT class="input" TYPE="text" NAME="email" SIZE="20" MAXLENGTH="30"></TD></TR>
                    <TR><TD>Tipo:</TD><TD><select class="input" TYPE="tipo" NAME="tipo" required>
        <option selected></option>
        <option selected>administrador</option>
        <option selected>trabajador</option>
        </select>
</TD>
</TR>
                
</table>
                            <INPUT class="btn_submint"  TYPE="submit" NAME="agregausu.php" VALUE="GUARDAR">
            </form>
            
                        <?php
                    }
                    else
                    {
                    }
                    ?>
                </div>
                </article>
        <footer>
            <hr align="center" width="100%" size="1">
            <p>&COPY; SURTIMAX. Todos los derechos reservados - 2018<br>Riobamba - Ecuador</p>
        </footer>	
    </body>
</html>