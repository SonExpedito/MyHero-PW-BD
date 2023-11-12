<?php

    include_once '../Conectar.php';

    //Parte dos Atributos
    class Autoria{
        private $cod_livro;
        private $cod_autor;
        private $editora;
        private $lancamento;


    //Parte 2 Get e Setters
         public function getcod_livro(){
             return $this->cod_livro;
            }

        public function setcod_livro($name){
            $this->cod_livro = $name;
         }


        public function getcod_autor(){
            return $this->cod_autor;
        }

        public function setcod_autor($iid){
            $this->cod_autor = $iid;
        }

    

        public function geteditora(){
            return $this->editora;
        }

        public function seteditora($editorzinho){
            $this->editora = $editorzinho;
        }

        
        public function getlancamento(){
            return $this->lancamento;
        }

        public function setlancamento($lancazinho){
            $this->lancamento = $lancazinho;
        }




        //Prepare
        // parte 3 - métodos

         function salvar(){
                try{
                    $this->conn = new Conectar();
                    $sql = $this->conn->prepare("insert into autoria values (?,?,?,?)");
                    @$sql->bindParam(1, $this->getcod_livro(), PDO::PARAM_STR);
                    @$sql->bindParam(2, $this->getcod_autor(), PDO::PARAM_STR);
                    @$sql->bindParam(3, $this->geteditora(), PDO::PARAM_STR);
                    @$sql->bindParam(4, $this->getlancamento(), PDO::PARAM_STR);
                    
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
                    $this->conn = new Conectar();
                    $sql = $this->conn->query("Select * from autoria order by cod_livro");
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
                    $this->conn = new Conectar();
                    $sql = $this->conn->prepare("delete from autoria where cod_autor = ?");
                    @$sql-> bindParam(1, $this->getcod_autor(), PDO::PARAM_STR);

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
                    $this->conn = new Conectar();
                    $sql = $this->conn->prepare("Select * from autoria where editora like ?");
                    @$sql-> bindParam(1, $this->geteditora(), PDO::PARAM_STR);
                    $sql->execute();
                    return $sql->fetchAll();
                    $this->conn = null;
                }
                catch(PDOException $exc){
                    echo "Erro ao consultar. " . $exc->getMessage();
                }
            }


             function alterar(){
                try{
                    $this->conn = new Conectar();
                    $sql = $this->conn->prepare("Select * from autoria where cod_autor = ? and cod_livro = ?");               
                    @$sql->bindParam(1, $this->getcod_autor(),PDO::PARAM_STR);
                    @$sql-> bindParam(2, $this->getcod_livro(), PDO::PARAM_STR);
                    $sql->execute();
                    return $sql->fetchAll();
                    $this->conn = null;
                }catch(PDOException $exc){
                    echo "Erro ao alterar. " . $exc->getMessage();
                }
            }
        
            function alterar2(){
                try{
                    $this->conn = new Conectar();
                    $sql = $this->conn->prepare("update autoria set editora = ?,  Datalancamento = ? where cod_autor = ? and cod_livro = ?");
                    @$sql->bindParam(1, $this->geteditora(),PDO::PARAM_STR);
                    @$sql-> bindParam(2, $this->getlancamento(), PDO::PARAM_STR);
                    @$sql->bindParam(3, $this->getcod_autor(),PDO::PARAM_STR);
                    @$sql-> bindParam(4, $this->getcod_livro(), PDO::PARAM_STR);

                    $sql->execute();
                    if($sql->execute() == 1){
        
                        return "Registro alterado com sucesso!";
        
                    }
                    $this->conn = null;
                }catch(PDOException $exc){
                    echo "Erro ao alterar registro. " . $exc->getMessage();
                }
            }


    }



?>