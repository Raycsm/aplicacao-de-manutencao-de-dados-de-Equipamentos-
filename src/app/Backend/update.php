<?php

header("Access-Control-Allow-Origin:*, Access-Control-Allow-Headers: X-Requested-With,
Content-Type, Origin, Cache-Control, Pragma, Authorization,Accept, Accept-Encoding,
Content-Type: application/json;");

 include_once './database.php';
    include_once './crud.php';

    $database = new DB();
    $db = $database->Connect();

    $item = new Equipamento($db);

    $data = json_decode(file_get_contents("php://input"));

    $item->id = $data->id;
    $item->numeroSerie = $data->numeroSerie;
    $item->fabricante = $data->fabricante;
    $item->tipoEquipamento = $data->tipoEquipamento;
    $item->subestação = $data->subestação;
    $item->dataOperação = $data->dataOperação;
    $item->nivelTensao = $data->nivelTensao;
    $item->statusEquipamento = $data->statusEquipamento;
    $item->observações = $data->observações;


    if($item->updateEquipamento()){
        echo json_encode("Atualizado com sucesso!.");
    } else{
        echo json_encode("Erro ao atualizar!.");
    }
?>
