<?php

    include_once 'Conectar2.php';

    //Parte dos Atributos
    class Produto{
        private $id;
        private $nome;
        private $estoque;
        private $conn;

        public function __construct() {
            $this->conn = new Conectar2(); // Assuming Conectar is your database connection class
        }

    //Parte 2 Get e Setters

        public function getId(){
            return $this->id;
        }

        public function setId($iid){
            $this->id = $iid;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($name){
            $this->nome = $name;
        }

        public function getEstoque(){
            return $this->estoque;
        }

        public function setEstoque($estoquinho){
            $this->estoque = $estoquinho;
        }

        //Prepare
        // parte 3 - métodos

         function salvar(){
                try{
                    $this->conn = new Conectar2();
                    $sql = $this->conn->prepare("insert into produto values (null,?,?)");
                    @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
                    @$sql->bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
                    
                    if($sql->execute() == 1){
                        return "Registro salvo com sucesso!";
                    }
                    $this->conn = null;
                }

                catch(PDOException $exc){
                     echo "Erro ao salvar o Registro. " . $exc->getMessage();
                     }
             }
             
         function listar(){
                try{
                    $this->conn = new Conectar2();
                    $sql = $this->conn->query("Select * from produto order by id");
                    $sql->execute();
                    return $sql->fetchAll();
                    $this->conn = null;
                }

                catch(PDOException $exc){
                    echo "Erro ao executar consulta. " . $exc->getMessage();
                }
            }


            function exclusao(){
                try{
                    $this->conn = new Conectar2();
                    $sql = $this->conn->prepare("delete from produto where id = ?");
                    @$sql-> bindParam(1, $this->getId(), PDO::PARAM_STR);

                    if($sql->execute() == 1){
                        return "Excluido com sucesso!";
                    }
                    else{
                        return "Erro ao excluir";
                    }
                    $this->conn = null;
                }
                catch(PDOException $exc){
                    echo "Erro ao excluir o Registro. " . $exc->getMessage();
                }
            }
            
        
            function consultar(){
                try{
                    $this->conn = new Conectar2();
                    $sql = $this->conn->prepare("Select * from produto where nome like ?");
                    @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
                    $sql->execute();
                    return $sql->fetchAll();
                    $this->conn = null;
                }
                catch(PDOException $exc){
                    echo "Erro ao consultar. " . $exc->getMessage();
                }
            }

    }



?>