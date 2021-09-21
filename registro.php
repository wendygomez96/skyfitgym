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
    <style type="text/css">
        html {
            background-image: url('imagenesprueba/fondo1.jpg');
        }
        .tablamayor {
            margin-left: 8%;
            margin-top: 3%;
        }
        .tdcompletareg {
            background-image: url('imagenesprueba/fondosky.jpg');
            border: 10px solid black;
            padding-left: 4%;
            padding-right: 4%;
            padding-top: 2%;
            padding-bottom: 2%;
            width: 49%;
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
        .auto-style13 {
            text-align: center;
            background-color: #FF9900;
        }
        .auto-style14 {
            text-align: center;
        }
        .auto-style16 {
            font-weight: bold;
            text-align: center;
        }
        .auto-style17 {
            text-align: center;
            height: 101px;
            background-color: #FF9900;
        }
        .auto-style18 {
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
        <div>
            <table class="tablamayor">
            <tr>
            <td><img src="https://media.revistagq.com/photos/5f7ddbde78c4dd5b8fdf24da/16:9/w_1280,c_limit/gimnasios-discotecas-nueva-normalidad.jpg" height="380" width="450"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
            <td class="tdcompletareg">
                <table class="tinterna">
                    <tr>
                        <td class="auto-style17">
                            <br />
                            <h3 class="auto-style13">¡Registrate, es GRATIS!</h3>
                            <asp:Label ID="lblregistro" runat="server" Font-Bold="True" Font-Size="Large" ForeColor="Blue" CssClass="auto-style18"></asp:Label>
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style16">
                          <?php
                          include('conexion.php');

                                  if (isset($_POST["submit"]) && !empty($_POST['identificacion']) && !empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) && !empty($_POST['contrasena']) && !empty($_POST['confirmecontrasena'])){
                                    $identificacion = $_POST["identificacion"];
                                    $nombres = $_POST["nombres"];
                                    $apellidos = $_POST["apellidos"];
                                    $correo = $_POST["correo"];
                                    $contrasena = $_POST["contrasena"];
                                    $confirmecontrasena = $_POST["confirmecontrasena"];


                                  $reg = "INSERT into registro (identificacion, nombres, apellidos, correo, contrasena, confirmecontrasena) VALUES ('$identificacion', '$nombres', '$apellidos', '$correo', '$contrasena', '$confirmecontrasena')";

                                  $resultado = mysqli_query($conexion,$reg)
                                  or die ("Error al insertar los registros");

                                  echo "<script>alert('¡REGISTRO EXITOSO! Por Favor, Inicie Sesion');
                                  window.location='/proyecto2/login2.php'</script>";
                                }else {
                                }
                           ?>

                            <form method="post">
                            <br />
                            <span class="auto-style18">Identificación:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="identificacion" value="" required><br />
                            <br />
                            <span class="auto-style18">Nombres:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                            <input type="text" name="nombres" value="" required><br />
                            <br />
                            <span class="auto-style18">Apellidos:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="apellidos" value="" required><br />
                            <br />
                            <span class="auto-style18">Correo:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="correo" value="" required><br />
                            <br />
                            <span class="auto-style18">Contraseña:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="password" name="contrasena" value="" required><br />
                            <br />
                            <span class="auto-style18">Confirme contraseña:</span>&nbsp;
                            <input type="password" name="confirmecontrasena" value="" required><br />
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style14"> <br />
                            <input id="Checkbox1" type="checkbox" required/> <b>Acepto la politica de privacidad</b>
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style14"> <br />
                            <input type="submit" name="submit" value="Registrarme" class="botonc">
                            <br /><br />
                        </td>
                    </tr>
                  </form>

                </table>
            </td>
            </tr>
            </table>
        </div>
    <footer class="auto-style12">
        <b>Copyright<br/>
        Autor: GAES 5 <br />
        Fecha de actualización: 20 Junio 2021</b>
    </footer>
</body>
</html>
