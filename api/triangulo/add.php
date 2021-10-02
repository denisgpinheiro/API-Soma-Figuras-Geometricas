<?php
    require_once('../../config/Database.php');
    require_once('../../class/Triangulo.php');

    $database = new Database;
    $db = $database->getConnect();

    $triangulo = new Triangulo($db);

    $triangulo->base = filter_input(INPUT_POST, 'base');
    $triangulo->altura = filter_input(INPUT_POST, 'altura');

    if(METHOD === 'post'){        
        if($triangulo->criarTriangulo()){
            $array['result'] = [
                    'id' => $triangulo->id, 
                    'tipo_figura' => $triangulo->tipoFigura,
                    'base' => $triangulo->base, 
                    'altura' => $triangulo->altura, 
                    'area' => $triangulo->area,
                    
                ];
        }
        else
        {
            $array['error'] = 'Verifique os parâmetros enviados.';
        }
    }
    else
    {
        $array['error'] = 'Erro no método. Precisa ser POST.';
    }

    require_once('../../config/return.php');
?>