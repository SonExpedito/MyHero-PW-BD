<?php
include_once 'Conectar.php';

//parte 1 - atributos

class Usuario{
    private $usuario;
    private $senha;
  
    private $conn;

    // parte 2 - os getters e setters
    function getUsu(){
        return $this->usuario;
    } 
    function setUsu($usuu){
        $this->usuario = $usuu;
    }
    function getSenha(){
        return $this->senha;
    } 
    function setSenha($senha){
        $this->senha = $senha;
    }

    // parte 3 - métodos

    function login(){
        try{
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("Select * from usuario where nome like ? and senha = ?");
            @$sql->bindParam(1, $this->getUsu(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getSenha(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }catch(PDOException $exc){
            echo "Usuario ou Senha inválidos. " . $exc->getMessage();
            
        }
    }
}

 ?>