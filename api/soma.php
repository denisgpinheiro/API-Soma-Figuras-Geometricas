<?php

    require_once('../config/Database.php');
    require_once('../class/Soma.php');

    $database = new Database;
    $db = $database->getConnect();

    $soma = new Soma($db);

    if(METHOD === 'post'){      
        if($soma->somaPoligonos()){
            $array['result'] = [
                    'total' => $soma->somarPoligonos, 
                ];
        }
        else
        {
            $array['error'] = 'Verifique os parametros enviados.';
        }
    }
    else
    {
        $array['error'] = 'Erro: O metodo de requisicao precisa ser post.';
    }

    require_once('../config/return.php');


?>