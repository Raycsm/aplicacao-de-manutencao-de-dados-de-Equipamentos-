<?php

header("Access-Control-Allow-Origin:*, Access-Control-Allow-Headers: X-Requested-With,Content-Type, Origin, Cache-Control, Pragma, Authorization,Accept, Accept-Encoding, Content-Type: application/json;");

    include_once 'config/database.php';
    include_once 'class/user.php';

    $database = new DB();
    $db = $database->Connect();

    $item = new Equipamento($db);

    $item->id = isset($_GET['id']) ? $_GET['id'] : die();

    if($item->deleteEquipamento()){
        echo json_encode("Deletado com sucesso!.");
    } else{
        echo json_encode("Erro ao deletar");
    }
?>
