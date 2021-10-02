<?php
    require_once('config/Database.php');
    require_once('class/Retangulo.php');

   
    $database = new Database;
    $db = $database->getConnect();

    $retangulo = new Retangulo($db);

  // echo $retangulo->calculaAreaRetangulos();

?>