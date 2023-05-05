<?php

require "../public/conexion.php";

    $consulta="SELECT * FROM tareas";
    $consulta=$db->prepare($consulta); 
    $consulta->execute();
    $resultado=$consulta->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($resultado);
 

?>