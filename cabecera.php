<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="UTF-8"/>
    <title> SKY FIT GYM </title>
    <meta name="description" content="SKY FIT GYM"/>
    <meta name="keywords" content="Programación, Diseño WEB, Programas, Tecnologia, Sistema, Información"/>
    <meta name="author" content="GAES 5"/>
    <link rel="icon" type="image/png" href="imagenesprueba/logo1.png" title="SKY FIT GYM"/>
    <link rel="stylesheet" type="text/css" href="style.php"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css">
        html {
            background-image: url('imagenesprueba/fondo1.jpg');
        }
        .auto-style3 {
            text-decoration-line: none;
            color: black;
            font-size: xx-large;
        }
        .auto-style3:visited {
            color: black;
        }
        .auto-style2 {
            background: linear-gradient(to right, red, orange, yellow);
            padding: 0.5%;
            text-align: center;
        }
        .auto-style5 {
            font-size: large;
            margin-left: 10%;
            margin-right: 10%;
            padding: 2%;
            text-align: justify;
            background-color: #FF9900;
        }
        .auto-style7 {
            background: linear-gradient(to bottom, red, orange, yellow);
        }
        .auto-style8 {
            background: linear-gradient(to bottom, red, orange, yellow);
        }
        .auto-style6 {
            text-align: center;
        }
        .auto-style12 {
            margin: 2%;
            background: linear-gradient(to top, red, orange, yellow);
            text-align: center;
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
        .auto-style18 {
            margin: auto;
            background-color: black;
            width: 800px;
            padding: 2%;
            height: 344px;
        }
    </style>
  </head>
