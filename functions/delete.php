<?php

require "../public/conexion.php";

$id = $_POST["id"];

$query = $db->prepare("DELETE FROM tareas WHERE pkid = :id");
$query->execute(['id'=>$id]);



