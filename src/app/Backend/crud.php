<?php

class Equipamento{

    private $conn;

    public  $id;
    public  $numeroSerie;
    public $fabricante;
    public $tipoEquipamento;
    public $subestação;
    public $dataOperação;
    public $nivelTensao;
    public $statusEquipamento;
    public $observações;

    public function __construct($db){
        $this->conn = $db;
    }

    public function getEquipamentos(){

        $sqlQuery = "SELECT
                      id,
                      numeroSerie,
                      fabricante,
                      tipoEquipamento,
                      subestação
                      dataOperação,
                      nivelTensao,
                      statusEquipamento,
                      observações
                      FROM
                      equipamentos";

      $stmt = $this->conn->prepare($sqlQuery);
      $stmt->execute();
      return $stmt;

    }

    public function getEquipamentobyId(){
      $sqlQuery = "SELECT
                  id,
                  numeroSerie,
                  fabricante,
                  tipoEquipamento,
                  subestação
                  dataOperação,
                  nivelTensao,
                  statusEquipamento,
                  observações
                    FROM
                      equipamentos
                  WHERE
                    id = ?
                  LIMIT 0,1";

      $stmt = $this->conn->prepare($sqlQuery);

      $stmt->bindParam(1, $this->id);

      $stmt->execute();

      $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

      $this->numeroSerie = $dataRow['numeroSerie'];
      $this->fabricante = $dataRow['fabricante'];
      $this->tipoEquipamento = $dataRow['tipoEquipamento'];
      $this->subestação = $dataRow['subestação'];
      $this->dataOperação = $dataRow['dataOperação'];
      $this->nivelTensao = $dataRow['nivelTensao'];
      $this->statusEquipamento = $dataRow['statusEquipamento'];
      $this->observações = $dataRow['observações'];

  }

    public function createEquipamento(){
      $sqlQuery = "INSERT INTO
                  equipamentos
              SET
              numeroSerie = :numeroSerie,
              fabricante = :fabricante,
              tipoEquipamento = :tipoEquipamento,
              subestação = :subestação,
              dataOperação = :dataOperação,
              nivelTensao = :nivelTensao,
              statusEquipamento = :statusEquipamento,
              observações = :observações";

      $stmt = $this->conn->prepare($sqlQuery);

      $this->numeroSerie=htmlspecialchars(strip_tags($this->numeroSerie));
      $this->fabricante=htmlspecialchars(strip_tags($this->fabricante));
      $this->tipoEquipamento=htmlspecialchars(strip_tags($this->tipoEquipamento));
      $this->subestação=htmlspecialchars(strip_tags($this->subestação));
      $this->dataOperação=htmlspecialchars(strip_tags($this->dataOperação));
      $this->nivelTensao=htmlspecialchars(strip_tags($this->nivelTensao));
      $this->statusEquipamento=htmlspecialchars(strip_tags($this->statusEquipamento));
      $this->observações=htmlspecialchars(strip_tags($this->observações));

      $stmt->bindParam(":numeroSerie", $this->numeroSerie);
      $stmt->bindParam(":fabricante", $this->fabricante);
      $stmt->bindParam(":tipoEquipamento", $this->tipoEquipamento);
      $stmt->bindParam(":subestação", $this->subestação);
      $stmt->bindParam(":dataOperação", $this->dataOperação);
      $stmt->bindParam(":nivelTensao", $this->nivelTensao);
      $stmt->bindParam(":statusEquipamento", $this->statusEquipamento);
      $stmt->bindParam(":observações", $this->observações);

      if($stmt->execute()){
         return true;
      }
      return false;
  }

  public function updateEquipamento(){
    $sqlQuery = "UPDATE
                equipamentos
            SET
            numeroSerie = :numeroSerie,
            fabricante = :fabricante,
            tipoEquipamento = :tipoEquipamento,
            subestação = :subestação,
            dataOperação = :dataOperação,
            nivelTensao = :nivelTensao,
            statusEquipamento = :statusEquipamento,
            observações = :observações
            WHERE
                id = :id";

    $stmt = $this->conn->prepare($sqlQuery);

    $this->numeroSerie=htmlspecialchars(strip_tags($this->numeroSerie));
    $this->fabricante=htmlspecialchars(strip_tags($this->fabricante));
    $this->tipoEquipamento=htmlspecialchars(strip_tags($this->tipoEquipamento));
    $this->subestação=htmlspecialchars(strip_tags($this->subestação));
    $this->dataOperação=htmlspecialchars(strip_tags($this->dataOperação));
    $this->nivelTensao=htmlspecialchars(strip_tags($this->nivelTensao));
    $this->statusEquipamento=htmlspecialchars(strip_tags($this->statusEquipamento));
    $this->observações=htmlspecialchars(strip_tags($this->observações));

    $stmt->bindParam(":numeroSerie", $this->numeroSerie);
    $stmt->bindParam(":fabricante", $this->fabricante);
    $stmt->bindParam(":tipoEquipamento", $this->tipoEquipamento);
    $stmt->bindParam(":subestação", $this->subestação);
    $stmt->bindParam(":dataOperação", $this->dataOperação);
    $stmt->bindParam(":nivelTensao", $this->nivelTensao);
    $stmt->bindParam(":statusEquipamento", $this->statusEquipamento);
    $stmt->bindParam(":observações", $this->observações);

    if($stmt->execute()){
       return true;
    }
    return false;
}

function deleteEquipamento(){
    $sqlQuery = "DELETE FROM equipamentos WHERE id = ?";
    $stmt = $this->conn->prepare($sqlQuery);

    $this->id=htmlspecialchars(strip_tags($this->id));

    $stmt->bindParam(1, $this->id);

    if($stmt->execute()){
        return true;
    }
    return false;
}


}


