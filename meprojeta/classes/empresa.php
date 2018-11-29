<?php
class Empresa{
  private $nome;
  private $cnpj;
  private $endereco;
  private $idEmpresa;
  public function empresa($nome,$cnpj,$endereco){
      $this->nome=$nome;
      $this->cnpj=$cnpj;
      $this->endereco=$endereco;
  }
  //Getter's
  public function getNome(){return $this->nome;}
  public function getCnpj(){return $this->cnpj;}
  public function getEndereco(){return $this->endereco;}
  public function getIdEmpresa(){return $this->idEmpresa;}

  //Setter's
  public function setNome($nome){$this->nome = $nome;}
  public function setCnpj($cnpj){$this->cnpj = $cnpj;}
  public function setEndereco($endereco){$this->endereco = $endreco;}
  public function setIdEmpresa($idEmpresa){$this->idEmpresa = $idEmpresa;}
}
?>
