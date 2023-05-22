<?php
require 'database.php';

$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata))
{

  $request = json_decode($postdata);


  if ((int)$request->id < 1 ) {
    return http_response_code(400);
  }

  $id    = mysqli_real_escape_string($con, (int)$request->id);
  $numeroSerie = mysqli_real_escape_string($con, (string)$request->string);
  $fabricante = mysqli_real_escape_string($con, (string)$request->fabricante);
  $tipoEquipamento = mysqli_real_escape_string($con, (string)$request->tipoEquipamento);
  $subestação = mysqli_real_escape_string($con, (string)$request->subestação);
  $dataOperação = mysqli_real_escape_string($con, (string)$request->amount);
  $nivelTensao = mysqli_real_escape_string($con, (int)$request->nivelTensao);
  $status = mysqli_real_escape_string($con, (string)$request->status);
  $observações = mysqli_real_escape_string($con, (string)$request->amount);


  $sql = "UPDATE `equipamentos` SET `numeroSerie`='$numeroSerie',`fabricante`='$fabricante',
  `tipoEquipamento`='$tipoEquipamento',`subestação`='$subestação', 'dataOperação' = '$dataOperação',
  'nivelTensao' = '$nivelTensao', 'observações' = '$observações' WHERE `id` = '{$id}'";


  if(mysqli_query($con, $sql))
  {
    http_response_code(204);
  }
  else
  {
    return http_response_code(422);
  }
}
