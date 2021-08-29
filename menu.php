<?php
include('funciones.php');
session-start();
 $_SESSION['nusuario']=$_POST['usuario'];
$_SESSION['nclave']=$_POST['clave'];


$miconexion=conectar_bd('1234', 'sena_bd');
$resultado=consulta($miconexion,"select * from usuarios where usua_nomuser='{$_SESSION['nusuario']}' and usua_contra='{$_SESSION['nclave']}'");
?>
<!doctype html>
<html>
   <head>
      <title>menu principal</titlte>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link herf="miscss/estilos.css" rel="stylesheet"/>
      <script src="js/bootstrap.js"></script>
    </head>
    <body>
     <div id="div1" class="container">
       <br>
       <div id="div2">
         <?php if($resultado->num_rows>0)  {?> <img src="IMAGENES/banner2.png"> <?php} ?>
         <div id="div3"  >
            <?php
              if($resulatdo->num_rows>0)
              {
                  $fila = $resultado->fetch_object();
                  $_SESSION['tipo_usuario']=$fila->usua_tipo;
            ?>
            <label class="lgris">bienvenido <?php echo $_SESSION['nusuario'] ?></label> <br>
            <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.herf ='registro_aprendiz.php'" value="registro de aprendices">
            <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.herf ='consulta_aprendiz.php'" value="consulta de aprendices">
            <br><br>
            <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.herf ='modificar_aprendiz.php'" value="actualizacion de aprendices">
            <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.herf ='borrar_aprendiz.php'" value="borrar aprendices">
            <br><br>
            <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.herf ='index.php'" value="crear programa">
            <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.herf ='index.php'" value="consulatr programa">
            <br><br>
            <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.herf ='index.php'" value="modificar programa">
            <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.herf ='index.php'" value="eliminar programa">
            <br><br>
            <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.herf ='index.php'" value="crear ficha">
            <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.herf ='index.php'" value="consultar ficha">
            <br><br>
            <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.herf ='index.php'" value="modificar ficha">
            <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.herf ='index.php'" value="eliminar ficha">
         <?php
              }
              else
              {
                  echo "usuario o clave invalido";
              }
            $miconexion->close();
            ?>
            <br><br>
         </div>
        </div>   
     </div>
    </body>
</html>           