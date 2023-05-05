<?php

$datos = $_POST["data"];

$anun = $_POST['textoanuncio'];
$cat = $_POST['categoria'];
$precio = $_POST['precio'];
        
        $query = $db->prepare("INSERT INTO tanuncios (textoanuncio, categoria, precio) VALUES ( :ta, :cat, :p)");
        $query->execute(['ta'=>$anun, 'cat'=>$cat, 'p'=>$precio]); 

        echo json_encode($response);