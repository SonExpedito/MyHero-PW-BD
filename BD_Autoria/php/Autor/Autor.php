<?php

include_once '../Conectar.php';

//Parte dos Atributos
class Autor
{
    private $cod_autor;
    private $nomeautor;
    private $sobrenome;
    private $datanasci;
    private $nacionalidade;
    private $email;

    //Parte 2 Get e Setters

    public function getcod_autor()
    {
        return $this->cod_autor;
    }

    public function setcod_autor($iid)
    {
        $this->cod_autor = $iid;
    }

    public function getnomeautor()
    {
        return $this->nomeautor;
    }

    public function setnomeautor($name)
    {
        $this->nomeautor = $name;
    }

    public function getsobrenome()
    {
        return $this->sobrenome;
    }

    public function setsobrenome($estoquinho)
    {
        $this->sobrenome = $estoquinho;
    }


    public function getdatanasci()
    {
        return $this->datanasci;
    }

    public function setdatanasci($ativizinho)
    {
        $this->datanasci = $ativizinho;
    }

    public function getnacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setnacionalidade($nacional)
    {
        $this->nacionalidade = $nacional;
    }

    public function getemail()
    {
        return $this->email;
    }

    public function setemail($emailzinho)
    {
        $this->email = $emailzinho;
    }


    //Prepare
    // parte 3 - métodos

    function salvar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into autor values (?,?,?,?,?,?)");
            @$sql->bindParam(1, $this->getcod_autor(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getnomeautor(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getsobrenome(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getdatanasci(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getnacionalidade(), PDO::PARAM_STR);
            @$sql->bindParam(6, $this->getemail(), PDO::PARAM_STR);


            if ($sql->execute() == 1) {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao salvar o Registro. " . $exc->getMessage();
        }
    }

    function listar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->query("Select * from autor order by cod_autor");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }

    function exclusao()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("delete from autor where cod_autor = ?");
            @$sql->bindParam(1, $this->getcod_autor(), PDO::PARAM_STR);

            if ($sql->execute() == 1) {
                return "Excluido com sucesso!";
            } else {
                return "Erro ao excluir";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao excluir o Registro. " . $exc->getMessage();
        }
    }


    function consultar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("Select * from autor where nomeautor like ?");
            @$sql->bindParam(1, $this->getnomeautor(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao consultar. " . $exc->getMessage();
        }
    }

    function alterar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("Select * from autor where cod_autor = ? ");
            @$sql->bindParam(1, $this->getcod_autor(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao alterar. " . $exc->getMessage();
        }
    }

    function alterar2()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("update autor set NomeAutor = ?,  Sobrenome = ?, DataNasci = ?, Nacionalidade = ?,
                 Email = ? where cod_autor = ?");
            @$sql->bindParam(1, $this->getnomeautor(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getsobrenome(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getdatanasci(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getnacionalidade(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getemail(), PDO::PARAM_STR);
            @$sql->bindParam(6, $this->getcod_autor(), PDO::PARAM_STR);

            $sql->execute();
            if ($sql->execute() == 1) {

                $successMessage = "Registro alterado com sucesso!";
                echo "<script>alert('$successMessage');</script> ";

            }
            $this->conn = null;
        } catch (PDOException $exc) {
            $Message = "Erro ao Alterar Registro";
            echo "<script>alert('$Message');</script> " . $exc->getMessage();
        }
    }

}



?>