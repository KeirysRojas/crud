<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta http-equiv="Contant-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
    <link herf="css/bootstrap.min.css" rel="stylesheet"/>
    <link herf="miscss/estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div id="div1" class="container">
        <br>
        <div id="div2">
            <img src="IMAGENES/banner.png">
            <div id="div3">
                <from id="formulario" method="post" action="menu.php">
                    <br>
                    <strong class="lgris">ingrese su usuario y contraseña para iniciar sesion</strong>
                    <br>
                    <label class="lgris">nombre de usuario:</label>
                    <br>
                    <input style="text-transform: uppercase;" type="text" name="usuario" value="" required/>
                    <br>
                    <label class="lgris">contraseña:</label>
                    <br>
                    <input type="password" name="clave" value="" required/> 
                    <br><br>
                    <input class="btn btn-primary" type="submit" value="iniciar sesion">
                    <br><br>
                </from>
            </div>
        </div>
    </div>
    <br><br>         
</body>
</html>