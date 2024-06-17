<?php
    // AQUI VAI SER NOSSA APLICAÇÃO
    require_once __DIR__ . '../../../api/config.php';
    require_once __DIR__ . '../../../api/response.php';

    $data = require_once __DIR__ . '../../../api/data.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

    } else{
        echo Responde::resposta(400,'error','Necessário informar o id');
        exit;
    }

    if($id < 0 || $id > count($data) - 1){
        echo Responde::resposta(400,'error','Cliente não encontrado');
        exit;
    }

    echo Response::resposta(200,'success',$data[$id]);

?>