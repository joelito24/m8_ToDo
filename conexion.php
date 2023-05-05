<?php

$dbhost = "127.0.0.1";
$dbname = "todo";
$dbuser = "root";
$dbpass = "";

try{
    $dsn = "mysql:host=".$dbhost.";dbname=".$dbname.";charset=utf8mb4";
    $db = new PDO($dsn, $dbuser, $dbpass); //conecta con la base de datos

}catch(PDOException $e){
    echo "Error de conexion:".$e;
    exit;

}