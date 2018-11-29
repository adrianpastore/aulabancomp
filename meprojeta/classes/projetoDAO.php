<?php
require_once('Empresa.php');
class EmpresaDao {
    private function criaConexao(){
        $conn = 'port=5432 dbname=mpbd user=postgres password=postgres';
        return pg_connect($conn);
    }
    public function add($empresa){//publico
        $conn = $this->criaConexao();
        $sql = 'INSERT INTO empresa (nome, endereço, cnpj) VALUES ($1, $2, $3)';
        $vetor = array($empresa->getNome(), $empresa->getEndereco(), $empresa->getCnpj());
        pg_query_params($conn,$sql,$vetor);
        pg_close($conn);
    }
    public function deletar($id) {
        $conn = $this->criaConexao();
        $sql2 = 'delete from empresa where id = $1';
        pg_query_params($conn, $sql2, array($id));
        pg_close($conn);
    }
    /*public function buscar($id) {
        $conn = $this->criaConexao();
        $sql3 = 'SELECT * FROM empresa WHERE id = $1';
        $vetor2 = array($id);
        $res = pg_query_params($conn,$sql3,$vetor2);
        $buscaEmpresa = array();
        while($empresa = pg_fetch_assoc($res)){
            array_push($buscaEmpresa,$empresa);
        }
        pg_close($conn);
        return $buscaEmpresa;
    }
    public function lista($limit, $offset) {
        $conn = $this->criaConexao();
        $sql = 'SELECT * FROM empresa LIMIT $1 OFFSET $2';
        $vetor = array($limit, $offset);
        $res = pg_query_params($conn,$sql,$vetor);
        $empresas = array();
        while($empresa = pg_fetch_assoc($res)){
            array_push($empresas,$empresa);
        }
        pg_close($conn);
        return $empresas;
    }*/
}