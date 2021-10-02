<?php
    require_once('../../config/Database.php');
    require_once('../../classes/Retangulo.php');

    //require('../../autoload.php');

    $database = new Database;
    $db = $database->getConnect();

    $retangulo = new Retangulo($db);

    $retangulo->base = filter_input(INPUT_POST, 'base');
    $retangulo->altura = filter_input(INPUT_POST, 'altura');

    if(METHOD === 'post'){        
        if($retangulo->criarRetangulo()){
            $array['result'] = [
                    'id' => $retangulo->id, 
                    'tipo_figura' => $retangulo->tipoFigura,
                    'base' => $retangulo->base, 
                    'altura' => $retangulo->altura, 
                    'area' => $retangulo->area,
                    
                ];
        }
        else
        {
            $array['error'] = 'Verifique os parâmetros enviados.';
        }
    }
    else
    {
        $array['error'] = 'Erro: O metodo da requisicao precisa ser POST.';
    }

    require_once('../../config/return.php');
?>