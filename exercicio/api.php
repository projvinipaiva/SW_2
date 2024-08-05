<?php
    header('Content-Type:application/json');
    include 'conexao.php';

    $metodo = $_SERVER['REQUEST_METHOD'];

    echo json_encode($metodo);

    $url = $_SERVER['REQUEST_URI'];

    $path = parse_url($url, PHP_URL_PATH);
    $path = trim($path,'/');
    $pathparts = explode('/',$path);

    echo json_encode($pathparts[1]);

    //CRIANDO AS VARIAVEIS PARA CADA PARTE DA URL

    $primeira = isset($pathparts[0]) ? $pathparts[0] : '';
    $segunda = isset($pathparts[1]) ? $pathparts[1] : '';
    $terceira = isset($pathparts[2]) ? $pathparts[2] : '';
    $quarta = isset($pathparts[3]) ? $pathparts[3] : '';

    // MONTANDO A RESPOSTA DA API EM JSON

    $response = [
        'metodo' => $metodo,
        'primeiraParte' => $primeira,
        'segundaParte' => $segunda,
        'terceiraParte' => $terceira,
        'quartaParte' => $quarta

    ]; 

    //MOSTRANDO A RESPOSTA
    //echo json_encode($response);

    //SELEÇÂO DO MÉTODO

    switch($metodo){
        case 'GET';
            //lógica para GET
            break;
        case 'POST';
            //lógica para POST
            break;
        case 'PUT';
            //lógica para PUT
            break;
        case 'DELETE';
            //lógica para DELETE
            break;
        default;
            echo json_encode(
                [
                    'mensagem' => 'Método não permitido!'
                ]
                );
            break;
    }
?>