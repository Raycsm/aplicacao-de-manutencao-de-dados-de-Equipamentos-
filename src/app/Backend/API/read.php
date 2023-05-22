<?php
/**
 * Returns the list of policies.+
 */
require 'database.php';

$equipamentos = [];
$sql = "SELECT id, numeroSerie, fabricante,tipoEquipamento, subestação
        dataOperação, nivelTensao, status, observações FROM equipamentos";

if($result = mysqli_query($con,$sql))
{
  $i = 0;
  while($row = mysqli_fetch_assoc($result))
  {
    $equipamentos[$i]['id']    = $row['id'];
    $equipamentos[$i]['numeroSerie'] = $row['numeroSerie'];
    $equipamentos[$i]['fabricante'] = $row['fabricante'];
    $equipamentos[$i]['tipoEquipamento'] = $row['tipoEquipamento'];
    $equipamentos[$i]['subestação'] = $row['subestação'];
    $equipamentos[$i]['dataOperação'] = $row['dataOperação'];
    $equipamentos[$i]['nivelTensao'] = $row['nivelTensao'];
    $equipamentos[$i]['status'] = $row['status'];
    $equipamentos[$i]['observações'] = $row['observações'];
    $i++;
  }

  echo json_encode($equipamentos);
}
else
{
  http_response_code(404);
}
