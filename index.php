<?php
require_once "funciones_bd.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1><center>INVENTARIO</center></h1>
        <p><a href="formulario_crear.php">Crear</a></p>
        <?php
            $db = conecta_db();
            $consulta = "SELECT * FROM equipo";
            $resultado = $db->query($consulta);
            //print_r($resultado);
            if (!$resultado) {
                echo "<p>Error en la consulta.</p>\n";
            } else {
                foreach ($resultado as $valor) {
                    echo "<p>".$valor['nombre']."</p>\n";
                }
            }   
                   
            $db = null;
        ?>
    </body>
</html>
