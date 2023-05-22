<?php
    header("Access-Control-Allow-Origin:*, Access-Control-Allow-Headers: X-Requested-With,Content-Type, Origin, Cache-Control, Pragma, Authorization,Accept, Accept-Encoding, Content-Type: application/json;");

    include_once './database.php';
    include_once './crud.php';

    $database = new DB();
    $db = $database->Connect();

    $items = new Equipamento($db);

    $stmt = $items->getEquipamentos();
    $itemCount = $stmt->rowCount();

    if($itemCount > 0){

        $equipamentoArr = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = array(
                "id" => $id,
                "numeroSerie" => $numeroSerie,
                "fabricante" => $fabricante,
                "tipoEquipamento" => $tipoEquipamento,
                "subestação" => $subestação,
                "dataOperação" => $dataOperação,
                "nivelTensao" => $nivelTensao,
                "statusEquipamento" => $statusEquipamento,
                "observações" => $observações,
            );

            array_push($equipamentoArr, $e);
        }
        echo json_encode($equipamentoArr);
    }
?>
