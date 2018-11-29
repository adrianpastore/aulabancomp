<?php
class Projeto{
  private $nome;
  private $desc;
  private $idProjeto;
  public function empresa($nome,$desc){
      $this->nome=$nome;
      $this->desc=$desc;
  }
  //Getter's
  public function getNome(){return $this->nome;}
  public function getDesc(){return $this->desc;}
  public function getIdProjeto(){return $this->idProjeto;}

  //Setter's
  public function setNome($nome){$this->nome = $nome;}
  public function setDesc($desc){$this->desc = $desc;}
  public function setIdProjeto($idProjeto){$this->idProjeto = $idProjeto;}
}
?>
