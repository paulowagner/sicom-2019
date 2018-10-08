<?php

class MySqlModel{

	protected $_db;
    /*private $ipHost = "sicom_atualiza.mysql.dbaas.com.br";
    private $nomeBanco = "sicom_atualiza";
    private $user = "sicom_atualiza";
    private $password = "gama-0044@2017";*/
    private $ipHost = "localhost";
    private $nomeBanco = "sicom";
    private $user = "root";
    private $password = "";
    public $_tabela;

    function __construct($tabela=null) {
        $this->_tabela = $tabela;
        $this->_db = new PDO('mysql:host=' . $this->ipHost . ';dbname=' . $this->nomeBanco, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function inserir($dados) {
        $resultSet = $this->_db->prepare($dados);

        $retorno = false;
        try {
            $resultSet->execute();
            $retorno = true;
        } catch (PDOException $ex) {
            echo 'Erro inesperado: ' . $ex->getMessage();
            exit;
        }
        return $retorno;
    }
	public function buscar($select = null,$where = null, $limit = null, $offset = null, $orderby = null) {
        $select = ($select != null ? "{$select}" : "*");
        $where = ($where != null ? "WHERE {$where}" : "");
        $limit = ($limit != null ? "LIMIT {$limit}" : "");
        $offset = ($offset != null ? "OFFSET {$offset}" : "");
        $orderby = ($orderby != null ? "ORDER BY {$orderby}" : "");

        $sql = " SELECT {$select} FROM {$this->_tabela} {$where} {$orderby} {$limit} {$offset}";
        $resultSet = $this->_db->prepare($sql);

        $retorno = false;
        try {
            $resultSet->execute();
            $resultSet->setFetchMode(PDO::FETCH_ASSOC);
            $retorno = $resultSet->fetchAll();
        } catch (PDOException $ex) {
            echo 'Erro inesperado: ' . $ex->getMessage();
            exit;
        }
        return $retorno;
    }
    public function buscar1(string $comando) {
        $resultSet = $this->_db->prepare($comando);

        $retorno = false;
        try {
            $resultSet->execute();
            $resultSet->setFetchMode(PDO::FETCH_ASSOC);
            $retorno = $resultSet->fetchAll();
        } catch (PDOException $ex) {
            echo 'Erro inesperado: ' . $ex->getMessage();
            exit;
        }
        return $retorno;
    }
    public function op($op,$select = null,$tabela = null,$data = null,$where = null ) {
        $data = $data != null ?"MONTH(data) =  MONTH('".$data."') and YEAR(data) =  YEAR('".$data."')":"1";
        $where = ($where != null ? "WHERE {$data} and {$where}" : "WHERE {$data}");
        $sql = " SELECT {$op}({$select}) AS op FROM {$tabela} {$where}";
        $resultSet = $this->_db->prepare($sql);

        $retorno = -1;
        try {
            $resultSet->execute();
            $resultSet->setFetchMode(PDO::FETCH_ASSOC);
            $retorno = $resultSet->fetchAll();
            if ($op=='SUM')
                $retorno = (float)number_format($retorno[0]['op'], 2, '.', '');
            else
                $retorno = (int)$retorno[0]['op'];
        } catch (PDOException $ex) {
            echo 'Erro inesperado: ' . $ex->getMessage();
            exit;
        }
        return $retorno;
    }
    public function atualizar($where) {

        $resultSet = $this->_db->prepare($where);
        $retorno = false;
        try {
            $resultSet->execute();
            $retorno = true;
        } catch (PDOException $ex) {
            echo 'Erro inesperado: ' . $ex->getMessage();
            exit;
        }
        return $retorno;
    }

    public function deletar($where,$tabela) {
        $sql = " DELETE FROM $tabela WHERE $where";
        $resultSet = $this->_db->prepare($sql);

        //Tratamento com PDO e chamada de Excessão - Usado tambem contra SQL Injection
        $retorno = false;
        try {
            $resultSet->execute();
            $retorno = true;
        } catch (PDOException $ex) {
            echo 'Erro inesperado: ' . $ex->getMessage();
            exit;
        }
        return $retorno;
    }

    public function runQuery($query) {

        $resultSet = $this->_db->prepare($query);

        $retorno = false;
        try {
            $resultSet->execute();
            $resultSet->setFetchMode(PDO::FETCH_ASSOC);
            $retorno = $resultSet->fetchAll();
        } catch (PDOException $ex) {
            echo 'Erro inesperado: ' . $ex->getMessage();
            exit;
        }
        return $retorno;
    }
    public function close(){
        //$this->connection->close();
    }

}
?>