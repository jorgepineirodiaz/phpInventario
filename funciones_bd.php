<?php
//CONSTANTES
define('DB_NAME', 'inventario');
define('DB_CONEX_PDO', 'mysql:host=localhost;dbname='.DB_NAME);
define('DB_USER', "root");
define('DB_PASS', "abc123.");

// FUNCIÓN DE CONEXIÓN CON LA BASE DE DATOS MYSQL
function conecta_db()
{
    try {
        //$db = new PDO("mysql:host=localhost", "root", "abc123.");
        $db = new PDO(DB_CONEX_PDO, DB_USER, DB_PASS);
        //$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        return($db);
    } catch(PDOException $e) {
        print "<p>Error: No puede conectarse con la base de datos.</p>\n";
        print "<p>Error: " . $e->getMessage() . "</p>\n";
        exit();
    }
}

// FUNCIÓN DE CONSULTA DE DATOS
function consulta_db(){
    
}

