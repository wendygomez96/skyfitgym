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
        .container{
            margin: auto;
            background-color: white;
            width: 800px;
            padding: 30px;
        }

        ul, li {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        ul.slider{
            position: relative;
            width: 800px;
            height: 300px;
        }

        ul.slider li {
            position: absolute;
            left: 0px;
            top: 0px;
            opacity: 0;
            width: inherit;
            height: inherit;
            transition: opacity .5s;
            background:#fff;
        }

        ul.slider li img{
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        ul.slider li:first-child {
            opacity: 1;
        }

        ul.slider li:target {
            opacity: 1;
        }

        .menu{
            text-align: center;
            margin: 20px;
        }

        .menu li{
            display: inline-block;
            text-align: center;
        }

        .menu li a{
            display: inline-block;
            color: white;
            text-decoration: none;
            background: linear-gradient(to top, red, orange, yellow);
            padding: 10px;
            width: 20px;
            height: 20px;
            font-size: 20px;
            border-radius: 100%;
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
        .auto-style18 {
            margin: auto;
            background-color: black;
            width: 800px;
            padding: 2%;
            height: 344px;
            float: left;
        }
        .div4 {
            float: left;
            margin-left: 2%;
            margin-right: 2%;
            width: 30%;
        }
        .auto-style12 {
            clear: both;
        }
        .auto-style19 {
            height: 398px;
        }
        .auto-style21 {
            background-color: #FF9900;
            color: black;
            padding: 1%;
            clear: both;
            text-align: center;
            font-size: 30pt;
            margin-left: 15%;
            margin-top: 32%;
            width: 70%;
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
        <form id="form1" runat="server">
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
        </div>
        </div> <br /><br />
        <div class="div4">
            <img width="93%" src="imagenesprueba/precio1.jpeg" class="auto-style19"/>
        </div>
        <div class="auto-style18">

            <ul class="slider">
                <li id="slide1">
                    <img src="imagenesprueba/slidern1.jpg"/>
                </li>
                <li id="slide2">
                    <img src="imagenesprueba/slidern2.jpg"/>
                </li>
                <li id="slide3">
                    <img src="imagenesprueba/slidern3.jpg"/>
                </li>
           </ul>

          <ul class="menu">
                <li>
                    <a href="#slide1">1</a>
                </li>
                <li>
                    <a href="#slide2">2</a>
                </li>
                <li>
                    <a href="#slide3">3</a>
                </li>
        </ul>

    </div>
    <div class="auto-style21">
        <strong>¡Pregunta por nuestras PROMOCIONES del mes!</strong>
    </div>
    </form>
    <br /><br />
    <footer class="auto-style12">
        <b>Copyright<br/>
        Autor: GAES 5 <br />
        Fecha de actualización: 20 Junio 2021</b>
    </footer>
</body>
</html>
