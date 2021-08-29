<!DOCTYPE html>
<html>
<head>
    <title>modificacion de aprendices</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div id="consulta" class="container">
       <br>
       <div id="div2">
         <div id="div4">
              <form name="formulario" role="form" methond="post">
                  <div class="col-md-12">
                    <strong class="lgris">ingrese criterio de busqueda</strong>
                    <br><br>
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION"/>
                      </div>
                      <div class="form-group col-md-3">
                        <input class="btn btn-primary" type="submit" value="consultar">
                      </div>
                    </div>
                    <br>
                  </div>
              </from>
              <br>
         </div>
         <div id="divconsulta2">
        <?php
        if ($_SERVER['REQUEST_METHOD']==='POST')
           {
               include('funciones.php');
               session_start();
               $vnumid=$_POST['numid'];
          $miconexion=conectar_bd('1234', 'sena_bd');
          $resultado=consulta($miconexion,"select * from aprendices where apre_numid='%{$vnumid}%'");  
          if ($resultado->numrows>0)
             {
                $fila = $resultado->fetch_object()
                $_SESSION['ide1']=$fila->apre_id;
                ?>
                
            }
          else{
            echo "no existen registros";
          }
          $miconexion->close();
        }?>
        </div>
    </div>
</body>
</html>