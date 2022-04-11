<?php

include_once 'Conectar.php';

class Categoria {

    private $id;
    private $descricao;
    private $con;

    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function salvar() {
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("INSERT INTO categoria VALUES (null, ?)");
            $sql->bindValue(1, $this->descricao, PDO::PARAM_STR);
            
            if($sql->execute() == 1){
                return TRUE;
            }else{
                return FALSE;
            }
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }
    function consultar() {
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("SELECT * FROM  categoria");           
            
            if($sql->execute() == 1){
                return $sql->fetchAll();
            }else{
                return FALSE;
            }
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }
    function excluir() {
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("DELETE FROM categoria WHERE id = ?");
            $sql->bindValue(1, $this->id, PDO::PARAM_STR);
            
            if($sql->execute() == 1){
                return TRUE;
            }else{
                return FALSE;
            }
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }

}

//fim class
