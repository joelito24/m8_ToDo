<?php

//este metodo es para actualizar un anuncio

$datos = $_POST["data"];

$anun = $_POST['textoanuncio'];
$cat = $_POST['categoria'];
$precio = $_POST['precio'];

    $query = $db->prepare("UPDATE tanuncios SET textoanuncio = :ta, categoria = :cat, precio = :p WHERE id = :id");
    $query->execute(['ta'=>$anun, 'cat'=>$cat, 'p'=>$precio, 'id'=>$datos['id']]);

    echo json_encode($response);
