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
        font-size: 100%;
    }
    .auto-style35 {
        background: linear-gradient(to right, red, orange, yellow);
        border-radius: 10%;
    }
    .form {
      background-color: #9f9f9f;
      border-radius: 10%;
      margin-left: 14%;
      margin-right: 14%;
      padding: 2%;
      width: 100%;
    }
    .divt {
      font-size: 150%;
      font-weight: bold;
      border-radius: 20%;
      background-color: #FFCC00;
      margin-left:  27%;
      margin-top: 2%;
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
    .container {
      width: 100%;
      margin-top: 3%;

    }
    .div2 {
      float: left;
    }
    .table {
      width: 100%;
      background-color: #b9b9b9;
      border-radius: 10%;
    }
    .divt {
      font-size: 150%;
      font-weight: bold;
      border-radius: 20%;
      background-color: #FFCC00;
      margin-left:  27%;
      margin-top: 5%;
      width: 60%;
    }
  }
  .auto-style33 {
      font-weight: bold;
  }
  .auto-style34 {
    /*background-color: #FFCC00;*/
    border-radius: 10%;
    text-align: center;
  }
  .auto-style36 {
    border-radius: 2%;
      margin-left: 23%;
      text-align: center;
      background-color: #b9b9b9;
      padding: 3%;
  }
  .auto-style38 {
      width: 100%;
  }
  .auto-style39 {
      width: 60%;
      text-align: center;
      vertical-align: baseline;
  }
  .auto-style40 {
      text-align: center;
  }
  .auto-style43 {
      font-size: xx-large;
  }
  .div6 {
      margin-bottom: 0%;
      width: 100%;
  }
  .auto-style44 {
      font-size: large;
  }
  .auto-style45 {
      background-color: #FFCC00;
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
</div> <br/>

<div class="divt" align="center"> Consulta las Facturas de Compra Productos</div>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="regresar" type="button" value="Regresar" class="btn btn-success" class="boton1" onClick="history.go(-1);">
<div class="container">
    <table class="auto-style38">
            <tr>
            <td class="auto-style40">
            <table class="auto-style34" align="center">
                <tr class="auto-style36"><form>
                    <td class="auto-style36">
                        <b> Desde:</b> <input type="date" value="fecha" id="fecha_inicio" name="fecha_inicio">
                        <br /><br /><br />
                    </td>
                </tr>
                <tr>
                    <td class="auto-style36">
                        <b> Hasta: </b><input type="date" value="fecha" id="fecha_final" name="fecha_final">
                        <br /><br />
                        <b> <input type="submit" value="Filtrar" class="btn btn-warning">
                            <input type="submit" value="Limpiar" class="btn btn-dark"> </b> <br />
                        <input type="hidden" id="form_sent" name="form_sent" value="true">
                    </td>
                </tr>

                <script type="text/javascript">
                  function Limpiar() {
                    var t = document.getElementById("f").getElementsByTagName("input");
                    for (var i=0; i<t.length; i++) {
                      t[i].value = "";
                    }
                  }
                </script>

              </form>
            </table>
            </td>
            <td class="auto-style39">
                <div class="div6">
                  <?php //if (isset($_GET['form_sent']) && $_GET['form_sent'] == "true") {?>
                  <?php $conexion=mysqli_connect('localhost','root','','proyecto') ?>
                      <table class="table" width="100%">
                    <thead>
                      <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Costo Unidad</th>
                        <th scope="col">Precio de Venta</th>
                        <th scope="col">Fecha</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php //$sql="SELECT * from aprendiz";
                        error_reporting(0);
                        $SDATE =$_GET['fecha_inicio'];
                        //$SSDATE = explode('/', $SDATE);
                        //$START_DATE = $SSDATE[2]."-".$SSDATE[0]."-".$SSDATE[1];
                        //echo('<h3>'.$SDATE.'</h3>');

                        $EDATE =$_GET['fecha_final'];
                        //$EEDATE = explode('/', $EDATE);
                        //$END_DATE = $EEDATE[2]."-".$EEDATE[0]."-".$EEDATE[1];
                        //echo('<h3>'.$EDATE.'</h3>');


                      $sql="SELECT * from agregarcompra where fecha Between '$SDATE' and '$EDATE' ORDER BY fecha";

                      $result = mysqli_query($conexion,$sql);
                      //$row = mysqli_fetch_assoc($result);
                      //$total_rows = mysqli_num_rows($result);
                      ?>
                      <?php
                      while ( $row = mysqli_fetch_assoc($result) ){
                        //mysqli_free_result($result)
                      ?>
                      <tr>
                        <th scope="row"><?php echo $row['codigo'] ?></th>
                        <td><?php echo $row['producto'] ?> </td>
                        <td><?php echo $row['cantidad'] ?></td>
                        <td><?php echo $row['proveedor'] ?></td>
                        <td><?php echo $row['costounidad'] ?></td>
                        <td><?php echo $row['preciodeventa'] ?></td>
                        <td><?php echo $row['fecha'] ?></td>
                        <td>

                        <?php } ?>
                        </td>
                      </tr>
                    </tbody>
                  </table> </table></div>
                    <br />
                    </div>
            </td>
            </tr>
          </table>
        </div>

    <br />
</body>
</html>
<?php
}else {
  header('location:login2.php');
}

 ?>
