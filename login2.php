<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title> SKY FIT GYM </title>
	<meta name="description" content="SKY FIT GYM"/>
	<meta name="keywords" content="Programación, Diseño WEB, Programas, Tecnologia, Sistema, Información"/>
	<meta name="author" content="GAES 5"/>
	<link rel="icon" type="image/png" href="imagenesprueba/logo1.png" title="SKY FIT GYM"/>
	<link rel="stylesheet" href="style.php"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <title>SKY FIT GYM</title>
     <link rel="stylesheet" href="vaidroll.css">
     <style>
     *
     {
     	font-family:arial;
     	text-align:center;
     }
     body
     {
     	top:50%;
     	left:50%;
     	position: absolute;
     	transform: translate(-50%,-50%);
			background-image: url('imagenesprueba/fondo1.jpg');
     /*background-image: radial-gradient(circle at 50% -20.71%, #d1c74b 0, #d9be40 8.33%, #e0b436 16.67%, #e7a82d 25%, #ec9b25 33.33%, #f08c21 41.67%, #f37b1f 50%, #f56922 58.33%, #f75528 66.67%, #f93f31 75%, #fa203b 83.33%, #f90047 91.67%, #f80054 100%);*/
     /*background-image: linear-gradient(180deg, #ffff5c 0, #ffff54 10%, #ffff51 20%, #ffff50 30%, #e3ff51 40%, #bcf253 50%, #97e055 60%, #75d059 70%, #55c25d 80%, #31b762 90%, #00ae68 100%);*/
     /*background: linear-gradient(to right, red, orange, yellow);*/
     }
     .ub1
     {
     text-align:left;
     font-weight: bold;
     color:white;
     margin-bottom:0.5em;
     margin-top:0.5em;
     }
     .caja1
     {
     	background-color: rgba(0, 0, 0, .9);
     	width:20em;
         height: auto;
         position: relative;
         margin: auto;
         padding: 2em;
     	border-radius: 1em;
     	color:black;


     }
     input, select
     {
     	width: 100%;
         padding: 0.5em;
     	font-size:1em;
     	border-radius:5px;
     	border:1px solid black;
     	color:black;
     	text-align:left;

     }

     input::placeholder
     {
       color: #1E265D;
       font-weight: bold;
        opacity: 0.5;
     }

     input[type=submit],input[type=reset]
     {
     margin-top: 1.5em;
     width:48%;
     text-align:center;
     background-color: #1958AD;
     color:white;

     }
     input[type=checkbox]
     {
     margin-left:0;
     width:10%;

     }

     .formtlo
     {
     	font-size:2em;
     	font-weight: bold;
     	padding-bottom:0.8em;
     	color:white;
     }

		 .auto-style22 {
		 	background-color: white;
		 }

     </style>
</head>
<body>
<div class="caja1">

	<?php
	include('conexion.php');
	if(isset($_POST["submit"])) {
		session_start();
		$identificacion = $_POST['identificacion'];
		$contrasena = $_POST['contrasena'];

		$consulta = "SELECT * FROM registro WHERE identificacion = '$identificacion' AND contrasena = '$contrasena'";
		$resultado = mysqli_query($conexion, $consulta);
		$filas=mysqli_num_rows($resultado);

		if ($filas > 0) {
			$_SESSION['identificacion'] = $identificacion;
			header('location:bienvenida2.php');
			die();
		}else {
			echo "<script>alert('¡Datos incorrectos!');
			window.location='/proyecto2/login2.php'</script>";
		}
	//}
	if ($identificacion = $_POST['identificacion'] == "admin" && $contrasena = $_POST['contrasena']== "123456") {
		$_SESSION['identificacion'] = $identificacion;
		header('location:bienvenida.php');
		die();
	}else {
		echo "<script>alert('¡Datos incorrectos!');
		window.location='/proyecto2/login2.php'</script>";
	}
}
	 ?>


<form method="post">
<div class="formtlo">Login</div>
<div class="ub1">&#128273; Ingresar Identificacion</div>
<input type="text" name="identificacion" placeholder="Ingresar usuario">
<div class="ub1">&#128274; Ingresar Contraseña</div>

<input type="password" name="contrasena" id="txtpassword" placeholder="Ingresar password">

<div class="ub1">
<input type="checkbox" onclick="verpassword()" >Mostrar contraseña
 </div>
<!--<div class="ub1">Rol</div>
<select name="rol">
<option value="0" style="display:none;"><label>Seleccionar</label></option>
<option value="Usuario">Usuario</option>
<option value="Admin">Administrador</option>
</select>-->

<div align="center">
<input type="submit" name="submit" value="Ingresar">

<input type="reset" value="Cancelar" onclick="location.href='/proyecto2/index.php'">
</div><br/>
<span class="auto-style22">¿No tienes cuenta? </span> <a href="/proyecto2/registro.php"><span class="auto-style22">REGISTRATE</span></a>

</form>
</div>
</body>
<script>
  function verpassword(){
      var tipo = document.getElementById("txtpassword");
      if(tipo.type == "password")
	  {
          tipo.type = "text";
      }
	  else
	  {
          tipo.type = "password";
      }
  }
</script>
</html>
