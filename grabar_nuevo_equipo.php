<?php
session_start();
require_once 'funciones_validacion.php';

function validarDatosRegistro(){

    //RECOGIDA DE DATOS DEL FORMULARIO_CREAR.PHP
    $datos = Array();
        
    $datos[0] = (isset($_REQUEST['nombre'])) ?$_REQUEST['nombre'] :"";
    $datos[1] = (isset($_REQUEST['desc'])) ?$_REQUEST['desc'] :"";
    $datos[2] = (isset($_REQUEST['ip'])) ?$_REQUEST['ip'] :"";
    $datos[3] = (isset($_REQUEST['ram'])) ?$_REQUEST['ram'] :"";

    //CONTROL DE ERRORES DE VALIDACIÓN
    $errores = Array();
       
    $errores[0] = validarNombre($datos[0]);
    $errores[1] = validarDesc($datos[1]);
    $errores[2] = validarIp($datos[2]);
    $errores[3] = validarRam($datos[3]);
        
    //ASIGNAR A VARIABLES DE SESSION
    $_SESSION['datos'] = $datos;
    $_SESSION['errores'] = $errores;
    $_SESSION['hayErrores'] = ($errores[0] || $errores[1] || $errores[2] || $errores[3]);
}

validarDatosRegistro();

if ($_SESSION['hayErrores']){
    $url = "formulario_crear.php";
    header('Location:'.$url);
} else {
    echo "grabar equipo en base de datos";
}
    
    
   /* 
    $db = conecta_db();
    $consulta = "SELECT * FROM equipo";
    $resultado = $db->query($consulta);
    //print_r($resultado);
    $db = null;
    */
    
?>