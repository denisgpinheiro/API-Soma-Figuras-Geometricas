<?php
    //Permitir requisições de qualquer site
    header("Access-Control-Allow-Origin: *");

    //Métodos permitidos para requisição
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

    //Informando formato de retorno json por padrão
    header("Content-Type: application/json");

    echo json_encode($array);
    exit;

?>