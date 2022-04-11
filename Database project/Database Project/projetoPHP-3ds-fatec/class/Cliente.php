<?php

include_once 'Conectar.php';

class Cliente {

    private $id;
    private $descricao;
    private $con;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function salvar() {
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("INSERT INTO cliente VALUES (null, ?, ?, ?)");
            $sql->bindValue(1, $this->nome, PDO::PARAM_STR);
            $sql->bindValue(2, $this->email, PDO::PARAM_STR);
            $sql->bindValue(3, $this->telefone, PDO::PARAM_STR);
            
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
            $sql = $this->con->prepare("SELECT * FROM  cliente");           
            
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
            $sql = $this->con->prepare("DELETE FROM cliente WHERE id = ?");
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