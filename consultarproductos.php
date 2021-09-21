<?php
session_start();
$identificacion = $_SESSION['identificacion'];

if(isset($_SESSION['identificacion'])) {

?>

<!DOCTYPE html>
<html>
<title>SKY FIT GYM</title>
<meta name="description" content="SKY FIT GYM"/>
<meta name="keywords" content="Programación, Diseño WEB, Programas, Tecnologia, Sistema, Información"/>
<meta name="author" content="GAES 5"/>
<link rel="icon" type="image/png" href="imagenesprueba/logo1.png" title="SKY FIT GYM"/>
<link rel="stylesheet" href="estilo.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    html {
        /*background-image: url('imagenesprueba/fondo1.jpg');*/
        background-color:  #d9d9d9;
    }
    body {
        /*background-image: url('imagenesprueba/fondo1.jpg');*/
        background-color:  #d9d9d9;
        margin-left: 0%;
        margin-top: 0%;
        margin-right: 0%;
    }
    header {
      position: fixed;
      width: 94.8%;
      height: 9%;
      margin-left: 5.2%;
    }
    .auto-style13 {
        float: left;
        width: 8%;
        height: 56px;
        padding: 0.3%;
        background-color: black;
    }
    .auto-style15 {
        font-size: small;

    }
    .auto-style17 {
        font-size: 200%;

    }
    .auto-style18 {
      /*background-image: linear-gradient(180deg, #f990ff 0, #a974ff 25%, #5353f2 50%, #0033b2 75%, #001979 100%);*/
      /*background-image: radial-gradient(circle at 50% -20.71%, #ffff52 0, #e8ff56 10%, #cbfa5c 20%, #acf162 30%, #8de668 40%, #6cd86c 50%, #49c970 60%, #1abd74 70%, #00b279 80%, #00a97e 90%, #00a184 100%);*/
        /*background: linear-gradient(to bottom, blue, #88D8C0, white);*/
        background: linear-gradient(to bottom, red, orange, yellow);
        /*border-bottom: 15px solid red;*/

        margin-bottom: 0%;
    }
    .auto-style19 {
        text-align: right;
        margin: 0%;
        padding: 0%;
        font-weight: normal;
        font-size: larger;
    }
    li {
        list-style: none;
        padding-top: 2%;
        padding-bottom: 2%;
    }
    li a {
      color: Black;
    }
    li a:hover {
      color: red;
    }
    li img{
        width: 60%;
    }
    li hr {
        color: black;
        width: 100%;
    }
    ul {
      height: 10%;
    }
    .auto-style20 {
        background: linear-gradient(to right, red, orange, yellow);
        margin-top: 0%;
        padding-top: 2%;
        padding-bottom: 2%;
        padding-right: 2%;
        text-align: center;
        width: 9.5%;
        height: 700px;
        /*border-right: 15px solid red;*/
        float:left;
        position: fixed;
    }
    .inventario{
        float: left;
    }
    .tinventario{
        background-color: white;
        width: 100%;
    }
    .auto-style23 {
        margin-top: 7%;
        margin-bottom: 3%;
        margin-left: 15%;
        margin-right: 15%;
        float: left;
        text-align: center;
        width: 75%;
        height: auto;
    }
    .auto-style26 {
      float: right;
        font-size: small;
    }
    .auto-style27 {
        font-size: large;
        background-color: #FFFFFF;
    }
    .div3 {
        clear: both;
        background: linear-gradient(to top, red, orange, yellow);
        /*border-top: 15px solid red;*/
        margin-bottom: 5%;
        padding: 0.5%;
        text-align: center;
        width: 100%;
    }
    .auto-style29 {
        text-align: right;
        margin: 0%;
        padding: 0%;
        font-weight: normal;
        font-size: small;
    }
    .auto-style32 {
        width: 100%;
        height: 90%;
    }
    .auto-style33 {
        font-size: 120%;
        background-color: #FFCC00;
        border-radius: 10%;
        margin-left: 4%;
    }
    .auto-style34 {
        font-size: 300%;
    }
    .auto-style35 {
        background: linear-gradient(to right, red, orange, yellow);
        border-radius: 10%;
    }
    .form {
      background-color: #9f9f9f;
      border-radius: 10%;
      padding: 2%;
      width: 100%;
    }
    .divt {
      font-size: 150%;
      font-weight: bold;
      border-radius: 20%;
      background-color: #FFCC00;
      margin-left:  20%;
      margin-top: 1%;
      width: 60%;
    }
    .label1 {
      font-weight: bold;
    }
    .input1 {
      width: 33%;
    }
    .boton1 {

    }
    .labelul {
      font-size: 100%;
    }
    input[type="file"] {

    }
    .img {
      background-color: white;
      width: 25%;
      max-height: 140px;
    }
    .w3-black {
      /*background-image: radial-gradient(circle at 50% -20.71%, #ffff52 0, #e8ff56 10%, #cbfa5c 20%, #acf162 30%, #8de668 40%, #6cd86c 50%, #49c970 60%, #1abd74 70%, #00b279 80%, #00a97e 90%, #00a184 100%);*/
      background: linear-gradient(to bottom, red, orange, yellow);
    }
    hr {
        margin-left: 13%;
        color: black;
        width: 80%;
    }
    .popi a:hover {
      color: red;
  		background-color: : red; /* Cambiamos el fondo cuando el usuario pase el mouse */
  		padding: 10px 30px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
      width: 130%;
    }


    </style>
</head>
<body>
  <header class="auto-style18">
      <span class="auto-style28">&nbsp;</span><strong><span class="auto-style8"><img src="imagenesprueba/logo1.png" title="SKY FIT GYM" id="logoinicio" class="auto-style13" /></span></strong><h1 id="h1" class="auto-style29"><strong><span class="auto-style17"><span class="auto-style15"><span class="auto-style14">
      <Label ID="lblperfil" runat="server" CssClass="auto-style27" ForeColor="Black"><?php /*echo $_SESSION['identificacion'] */?></Label>
          </span></span>SKY FIT GYM</span></strong></h1>
  </header>

<div class="w3-sidebar w3-bar-block w3-black w3-xxlarge" style="width:75px">
  <div class="popi">
  <!--<hr height="15px" color="black"/><a href="#" class="w3-bar-item w3-button"><i class="fa fa-users"></i></a>-->
  <hr color="black"/><a href="/proyecto2/usuarios.php" class="w3-bar-item w3-button" ><img width="90%" src="imagenesprueba/usuarios.png" title="Usuarios"/></a>
  <hr color="black"/><a href="/proyecto2/inventario1.php" class="w3-bar-item w3-button"><img width="90%" src="imagenesprueba/inventario.png" title="Inventario"/></a>
  <hr color="black"/><a href="/proyecto2/rutinas.php" class="w3-bar-item w3-button"><img width="90%" src="imagenesprueba/rutinas.png" title="Rutinas"/></a>
  <hr color="black"/><a href="/proyecto2/proveedores.php" class="w3-bar-item w3-button"><img width="90%" src="imagenesprueba/proveedores.png" title="Proveedores"/></a>
  <hr color="black"/><a href="/proyecto2/finalizar.php" class="w3-bar-item w3-button"><img width="90%" src="imagenesprueba/cerrar8.png" title="Finalizar"/></a>
  </div>
</div>

<div class="auto-style23">
  <div class="divt" align="center"> PRODUCTOS (Consultar, actualizar, eliminar)</div><br />

  <?php
  include('conexion.php');
  error_reporting(0);

    if(isset($_POST["consultar"]))$consultar=$_POST["consultar"];
    if(isset($_POST["editar"]))$editar=$_POST["editar"];
    if(isset($_POST["eliminar"]))$eliminar=$_POST["eliminar"];

    if($consultar){
    $codigo =$_POST['codigo'];
    $producto =$_POST['producto'];
    $proveedor =$_POST['proveedor'];


    $sql="SELECT codigo, producto, proveedor, costo, preciodeventa, stock, imagen FROM inventarioproductos WHERE codigo = '$codigo' OR producto = '$producto' OR proveedor = '$proveedor' ";
    $result = mysqli_query($conexion,$sql);

     $row = mysqli_fetch_assoc($result);

   }
   if($editar){
     $codigo =$_POST['codigo'];
     $producto =$_POST['producto'];
     $proveedor =$_POST['proveedor'];
     $costo =$_POST['costo'];
     $preciodeventa =$_POST['preciodeventa'];
     $stock =$_POST['stock'];
     $archivo = $_FILES['imagen'];
     $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
     $imagen = $producto.".".$extension;

     move_uploaded_file($archivo['tmp_name'], "./imagsistema/$imagen");

     $sql2="UPDATE inventarioproductos SET producto='$producto', proveedor='$proveedor', costo='$costo', preciodeventa='$preciodeventa', stock='$stock', imagen='$imagen' WHERE codigo='$codigo' ";
     $result2 = mysqli_query($conexion,$sql2);
     echo "<script>alert('¡Producto Actualizado Correctamente!');
     window.location='/proyecto2/consultarproductos.php'</script>";
   }
   if($eliminar){
     $codigo =$_POST['codigo'];

     $sql3="DELETE FROM inventarioproductos where codigo = '$codigo'";
     $result3 = mysqli_query($conexion,$sql3);

     echo "<script>alert('¡Producto Eliminado!');
     window.location='/proyecto2/consultarproductos.php'</script>";
   }
  ?>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="regresar" type="button" value="Regresar" class="btn btn-success" class="boton1" onClick="history.go(-1);"><br /><br />
  <form method="post"class="form" enctype="multipart/form-data">
    <label class="label1">Codigo:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php echo "<input class='input1' type='text' name='codigo' value='$row[codigo]'>"; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="label1">Producto:</label>
    <?php echo "<input class='input1' type='text' name='producto' value='$row[producto]'>"; ?><br/> <br /><br />
    <label class="label1">Proveedor:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php echo "<input class='input1' type='text' name='proveedor' value='$row[proveedor]'>"; ?> &nbsp;&nbsp;&nbsp;
    <label class="label1">Costo Unidad:</label>
    <?php echo "<input class='input1' type='text' name='costo' value='$row[costo]'>"; ?><br/> <br /><br />
    <label class="label1">Precio de Venta:</label>
    <?php echo "<input class='input1' type='text' name='preciodeventa' value='$row[preciodeventa]'>"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="label1">Unidades:</label>
    <?php echo "<input class='input1' type='text' name='stock' value='$row[stock]'>"; ?><br/> <br />
    <label class="label1">Imagen:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="img" src="imagsistema/<?php echo $row['imagen']; ?>" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class='input1' type='file' name='imagen'>
     <br/><br /><br />

    <input name="consultar" type="submit" value="Consultar" class="btn btn-dark" class="boton1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="editar" type="submit" value="Editar" class="btn btn-warning" class="boton1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="eliminar" type="submit" value="Eliminar" class="btn btn-danger" class="boton1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="limpiar" type="submit" value="Limpiar Formulario" class="btn btn-dark" class="boton1">

    <script type="text/javascript">
      function Limpiar() {
        var t = document.getElementById("f").getElementsByTagName("input");
        for (var i=0; i<t.length; i++) {
          t[i].value = "";
        }
      }
    </script>
  </form>
</div>

</body>
</html>
<?php
}else {
  header('location:login2.php');
}

 ?>
