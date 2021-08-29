<!doctype html>
<html>
<head>
    <title>eliminacion de aprendices</title>
    <meta http-equiv="content-Type" content="text/html: charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirnk_to_fit=no">
    <link herf="css/bootstrap.min.css" rel="stylesheet"/>
    <link herf="miscss/estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
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
                     <div class="form_row">
                        <div class="form_groupcol-md-5">
                           <input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION"/>
                        </div>
                        <div class="form-group col-md-3">
                           <input class="btn btn-primary" type="submit" value="eliminar">
                        </div>
                 </div>
                  <br>
                </from> 
            </div>
            <br>

            <div id="divconsulta2">
           <?php
           if ($_SERVER['REQUEST_METHOD']==='POST')
           {
            include('funciones.php');
            $vnumid=$_POST['numid'];
            $miconexion=conectar_bd('1234', 'sena_bd');
            $resultado=consulta($miconexion,"select * from aprendices where apre_numid'{$vnumid}'");
            $resultado=consulta($miconexion,"delete from aprendices where apre_numid'{$vnumid}'");
            if ($resultado->numrows>0)
            {
                $fila = $resultado->fetch_object();
                echo $fila->apre_id." ".$fila->apre_tipoid." ".$fila->apre_numid." ".$fila->apre_nombres." ".$fila->apre_apellidos." ".$fila->apre_direccion." ".$fila->apre_telefono." ".$fila->apre_ficha."<br>";
            } 
            else{
                echo "no existen registros";
              }
              $miconexion->close();
           }?>
        </div>
        </div>
    </div>
</body>
</html>