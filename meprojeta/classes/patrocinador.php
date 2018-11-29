<?php
class Patrocinador{
  private $nome;
  private $valorInvestimento;
  private $representante;
  private $email;
  private $idPatrocinador;
  public function empresa($nome,$valorInvestimento,$representante,$email){
      $this->nome=$nome;
      $this->valorInvestimento=$valorInvestimento;
      $this->representante=$representante;
      $this->email=$email;
  }
  //Getter's
  public function getNome(){return $this->nome;}
  public function getValorInvestimento(){return $this->valorInvestimento;}
  public function getRepresentante(){return $this->representante;}
  public function getEmail(){return $this->email;}
  public function getIdPatrocinador(){return $this->idPatrocinador;}

  //Setter's
  public function setNome($nome){$this->nome = $nome;}
  public function setValorInvestimento($valorInvestimento){$this->valorInvestimento = $valorInvestimento;}
  public function setRepresentante($representante){$this->representante = $representante;}
  public function setEmail($email){$this->email = $email;}
  public function setIdPatrocinador($idPatrocinador){$this->idPatrocinador = $idPatrocinador;}
}
?>
