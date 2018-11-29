<?php
class Etapa{
  private $tipo;
  private $desc;
  private $dataInicio;
  private $dataPrevisaoTermino;
  private $idEtapa;
  public function empresa($tipo,$desc,$dataInicio,$dataPrevisaoTermino){
      $this->tipo=$tipo;
      $this->desc=$desc;
      $this->dataInicio=$dataInicio;
      $this->dataPrevisaoTermino=$dataPrevisaoTermino;
  }
  //Getter's
  public function getTipo(){return $this->tipo;}
  public function getDesc(){return $this->desc;}
  public function getDataInicio(){return $this->dataInicio;}
  public function getDataPrevisaoTermino(){return $this->dataPrevisaoTermino;}
  public function getIdEtapa(){return $this->idEtapa;}

  //Setter's
  public function setTipo($tipo){$this->tipo = $tipo;}
  public function setDesc($desc){$this->desc = $desc;}
  public function setDataInicio($dataInicio){$this->dataInicio = $dataInicio;}
  public function setDataPrevisaoTermino($dataPrevisaoTermino){$this->dataPrevisaoTermino = $dataPrevisaoTermino;}
  public function setIdEtapa($idEtapa){$this->idEtapa = $idEtapa;}
}
?>
