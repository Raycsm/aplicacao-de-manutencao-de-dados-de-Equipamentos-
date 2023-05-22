<?php

   header("Access-Control-Allow-Origin: *");
   header("Content-Type: application/json; charset=UTF-8");
   header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");
   header("Access-Control-Max-Age: 3600");
   header("Access-Control-Allow-Headers: Content-Type,
        Access-Control-Allow-Headers, Authorization, X-Requested-With");


    include_once 'database.php';
    include_once 'class/crud.php';

    $database = new DB();
    $db = $database->Connect();

    $item = new Equipamento($db);

    $data = json_decode(file_get_contents("php://input"));

    $item->numeroSerie = $data->numeroSerie;
    $item->fabricante = $data->fabricante;
    $item->tipoEquipamento= $data->tipoEquipamento;
    $item->subestação = $data->subestação;
    $item->dataOperação = $data->dataOperação;
    $item->nivelTensao= $data->nivelTensao;
    $item->statusEquipamento = $data->statusEquipamento;
    $item->observações = $data->fabricante;

    if($item->createEquipamento()){
        echo json_encode("Equipamento criado.");
    } else{
        echo json_encode("Falha ao criar equipamento.");
    }
?>
