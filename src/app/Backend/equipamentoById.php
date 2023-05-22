<?php
    header("Access-Control-Allow-Origin:*, Access-Control-Allow-Headers: X-Requested-With,Content-Type, Origin, Cache-Control, Pragma, Authorization,Accept, Accept-Encoding, Content-Type: application/json;");

    include_once './database.php';
    include_once './crud.php';

    $database = new DB();
    $db = $database->Connect();

    $item = new Equipamento($db);

    $item->id = isset($_GET['id']) ? $_GET['id'] : die();

    $item->getEquipamentobyId();

    if($item != null){
        $user_Arr = array(
            "id" =>  $item->id,
            "numeroSerie" => $numeroSerie,
            "fabricante" => $fabricante,
            "tipoEquipamento" => $tipoEquipamento,
            "subestação" => $subestação,
            "dataOperação" => $dataOperação,
            "nivelTensao" => $nivelTensao,
            "statusEquipamento" => $statusEquipamento,
            "observações" => $observações,
        );

        http_response_code(200);
        echo json_encode($user_Arr);
    }

    else{
        http_response_code(404);
        echo json_encode("Equipamento não encontrado!");
    }
?>
