<?php
/*$usuario = 'root';
$clave = "";
$bd = "proyecto";

  $conexion = mysqli_connect($server, $usuario, $clave, $bd)
      or die ("Error en la conexion");*/
include('conexion.php');

      /*if(isset($_POST['submit'])){
        $identificacion = $_POST["identificacion"];
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $empresa = $_POST["empresa"];
        $ciudad = $_POST["ciudad"];*/

        if (isset($_POST["submit"]) && !empty($_POST['identificacion']) && !empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['empresa']) &&
        !empty($_POST['ciudad'])){
          $identificacion = $_POST["identificacion"];
          $nombres = $_POST["nombres"];
          $apellidos = $_POST["apellidos"];
          $correo = $_POST["correo"];
          $telefono = $_POST["telefono"];
          $empresa = $_POST["empresa"];
          $ciudad = $_POST["ciudad"];


        $insertar = "INSERT into contactenos (identificacion, nombres, apellidos, correo, telefono, empresa, ciudad) VALUES ('$identificacion', '$nombres', '$apellidos', '$correo', '$telefono', '$empresa', '$ciudad')";

        $resultado = mysqli_query($conexion,$insertar)
        or die ("Error al insertar los registros");

        //mysqli_close($conexion);
        echo "<script>alert('¡Datos insertados correctamente,nos comunicaremos pronto!');
        window.location='/proyecto2/contactenos.php'</script>";
      }else {
      }
header('proyecto2::contactenos.php')

/*echo "<script>alert('Error al insertar los registros');
            window.history.go(-1)</script>";*/
 ?>
