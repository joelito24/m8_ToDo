<?php

require "../public/conexion.php";

$evento = $_POST["nombre"];

        
$query = $db->prepare("INSERT INTO tareas (nombre_tarea) VALUES (:nt)");
$query->execute(['nt'=>$evento]); 
