<?php
require 'database.php';

$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata))
{

  $request = json_decode($postdata);

  $numeroSerie = mysqli_real_escape_string($con, (string)$request->string);
  $fabricante = mysqli_real_escape_string($con, (string)$request->fabricante);
  $tipoEquipamento = mysqli_real_escape_string($con, (string)$request->tipoEquipamento);
  $subestação = mysqli_real_escape_string($con, (string)$request->subestação);
  $dataOperação = mysqli_real_escape_string($con, (string)$request->amount);
  $nivelTensao = mysqli_real_escape_string($con, (int)$request->nivelTensao);
  $status = mysqli_real_escape_string($con, (string)$request->status);
  $observações = mysqli_real_escape_string($con, (string)$request->amount);


  $sql = "INSERT INTO `equipamentos`(`id`,`numeroSerie`,`fabricante`,
   `tipoEquipamento`,`subestação`,`dataOperação`, `nivelTensao`,
   `status`,`observações`) VALUES ('{$numeroSerie}','{$fabricante}'),
   '{$tipoEquipamento},'{$subestação}','{$dataOperação}'),
   '{$nivelTensao},'{$status}','{$observações}')";

  if(mysqli_query($con,$sql))
  {
    http_response_code(201);
    $equipamentos = [
      'observações' => $observações,
      'status' => $status,
      'nivelTensao' => $nivelTensao,
      'dataOperação' => $dataOperação,
      'subestação' => $subestação,
      'tipoEquipamento' => $tipoEquipamento,
      'fabricante' => $fabricante,
      'numeroSerie' => $numeroSerie,
      'id'    => mysqli_insert_id($con)
    ];
    echo json_encode($equipamentos);
  }
  else
  {
    http_response_code(422);
  }
}
