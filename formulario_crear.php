<?php
session_start();

$_SESSION['datos'] = (isset($_SESSION['datos'])) ?$_SESSION['datos'] :Array("","","","");
$_SESSION['errores'] = (isset($_SESSION['errores'])) ?$_SESSION['errores'] :Array(FALSE,FALSE,FALSE,FALSE);
$_SESSION['hayErrores'] = (isset($_SESSION['hayErrores'])) ?$_SESSION['hayErrores'] :FALSE;

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1><center>INVENTARIO</center></h1>    
        <h2>EQUIPO</h2>
        <form action="grabar_nuevo_equipo.php" method="post">
            <p>Nombre: <input type="text" name="nombre"/></p>
            <p>Descripción: <input type="text" name="desc"/></p>
            <P>IP: <input type="text" name="ip" /></p>
            <P>RAM: <input type="text" name="ram" /></p>
            <p><input type="submit" value="Enviar"/></p>
        </form>
    </body>
</html>
