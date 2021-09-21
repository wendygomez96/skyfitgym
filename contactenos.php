<?php include ('insertar.php') ?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="UTF-8"/>
    <title> SKY FIT GYM </title>
    <meta name="description" content="SKY FIT GYM"/>
    <meta name="keywords" content="Programación, Diseño WEB, Programas, Tecnologia, Sistema, Información"/>
    <meta name="author" content="GAES 5"/>
    <link rel="icon" type="image/png" href="imagenesprueba/logo1.png" title="SKY FIT GYM"/>
    <link rel="stylesheet" href="style.php"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        html {
            background-image: url('imagenesprueba/fondo1.jpg');
        }
        iframe {
            border: 10px solid black;
        }
        .tdcompleta {
            background-image: url('imagenesprueba/fondosky.jpg');
            border: 10px solid black;
            padding-left: 4%;
            padding-right: 4%;
            width: 40%;
        }
        .tablamayor {
            margin-left: 9%;
        }
        .auto-style2 {
            background: linear-gradient(to right, red, orange, yellow);
            padding: 0.5%;
            text-align: center;
        }
        .auto-style3 {
            text-decoration-line: none;
            color: black;
        }
        .auto-style3:visited {
            color: black
        }
        .auto-style7 {
            background: linear-gradient(to bottom, red, orange, yellow);
        }
        .auto-style8 {
            background: linear-gradient(to bottom, red, orange, yellow);
        }
        .auto-style12 {
            margin: 2%;
            background: linear-gradient(to top, red, orange, yellow);
            text-align: center;
        }
        .auto-style16 {
            text-align: center;
        }
        .auto-style17 {
            font-weight: bold;
            text-align: center;
        }
        .auto-style18 {
            text-align: center;
            background-color: #FF9900;
        }
        .auto-style19 {
            background-color: #FF9900;
        }
        .botonc {
          font-size: small;
          font-weight: bold;
          width: 65%;
          height: 38px;
        }
    </style>
</head>
<body>
    <header>
        <img src="imagenesprueba/logo1.png" title="SKY FIT GYM" id="logoinicio" class="auto-style9" />
        <a href="https://es-la.facebook.com/" target="_blank"><img class="auto-style10" src="imagenesprueba/facebook.png" /></a>
        <a href="https://www.instagram.com/?hl=es-la" target="_blank"><img class="auto-style11" src="imagenesprueba/instagram2.png" /></a>
        <h1 id="h1" class="auto-style1">&nbsp;<span class="auto-style4"><strong><span class="auto-style8">SKY FIT GYM</span></strong></span></h1>
        &nbsp;<h3 id="tprincipal2" class="auto-style1"> <span class="auto-style7">TU SALUD TU MEJOR INVERSION...</span> </h3>
        &nbsp;
    </header>
    <div class="auto-style6">
    <div class="auto-style2">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;<strong><a href="/proyecto2/index.php" CssClass="auto-style3">Inicio</a>
        </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<strong><a href="/proyecto2/nosotros.php" CssClass="auto-style3">Nosotros</a>
        </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<strong><a href="/proyecto2/contactenos.php" CssClass="auto-style3">Contactenos</a>
        </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>
        <a href="/proyecto2/login2.php" CssClass="auto-style3">Inicie Sesion</a>
        </strong>
    </div></div>
            <br /> <br />
        <div>
            <table class="tablamayor">
            <tr>
            <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.819102346712!2d-74.1851007852379!3d4.626341296639228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9e777c4dbf33%3A0x8232f03f6a0b64ca!2ssky%20gym!5e0!3m2!1ses!2sco!4v1624170219659!5m2!1ses!2sco" width="600" height="450" allowfullscreen="" loading="lazy"></iframe>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
            <td class="tdcompleta">
                <table class="tinterna">
                    <tr>
                        <td class="auto-style18">
                            <br />
                            <h3 class="auto-style19">¡Nuestro equipo se pondra en contacto contigo!</h3>
                            <asp:Label ID="lblcontacto" runat="server" Font-Bold="True" Font-Size="Large" ForeColor="Blue"></asp:Label>
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style17">
                            <br />



                            <form method="post" action="insertar.php">
                            <span class="auto-style19">Identificación: </span>&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="identificacion" value="" required>
                            <!--<span class="error"><?php echo $error; ?></span>-->
                            <br />
                            <br />
                            <span class="auto-style19">Nombres:</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="nombres" value="" required>
                            <br />
                            <br />
                            <!--<span class="error"><?php echo $error; ?></span>-->

                            <span class="auto-style19">Apellidos:</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="apellidos" value="" required>
                            <br />
                            <br />
                            <!--<span class="error"><?php echo $error; ?></span>-->

                            <span class="auto-style19">Correo:</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="email" name="correo" value="" required>
                            <br />
                            <br />
                            <!--<span class="error"><?php echo $error; ?></span>-->

                            <span class="auto-style19">Teléfono:</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="telefono" value="" required>
                            <br />
                            <br />
                            <!--<span class="error"><?php echo $error; ?></span>-->

                            <span class="auto-style19">Empresa:</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="empresa" value="" required>
                            <br />
                            <br />
                            <!--<span class="error"><?php echo $error; ?></span>-->

                            <span class="auto-style19">Ciudad:</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="ciudad" value="" required>
                            <br />
                            <br />
                            <!--<span class="error"><?php echo $error; ?></span>-->
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style16"> <br />
                            <input id="Checkbox1" type="checkbox" required/> <b>Acepto la politica de privacidad</b>
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style16"> <br />
                            <input type="submit" name="submit" value="Solicitar Información" class="botonc">
                            <br />
                            <br />
                          </form>

                        </td>
                    </tr>
                </table>
            </td>
            </tr>
            </table>
        </div>
    <br /><br />
    <footer class="auto-style12">
        <b>Copyright<br/>
        Autor: GAES 5 <br />
        Fecha de actualización: 20 Junio 2021</b>
    </footer>
</body>
</html>
