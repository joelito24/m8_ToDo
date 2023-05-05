<?php
require "../public/conexion.php";

$id = $_POST["id"];
$evento = $_POST["nombre"];
$done = $_POST["done"];

    $query = $db->prepare("UPDATE tareas SET nombre_tarea = :nt, done = :d WHERE pkid = :id");
    $query->execute(['nt'=>$evento, 'd'=>$done, 'id'=>$id]);
