<?php

include_once '../Conectar.php';

//Parte dos Atributos
class Livro
{
    private $cod_livro;
    private $titulolivro;
    private $isbn;
    private $categoria;
    private $idioma;


    //Parte 2 Get e Setters
    public function getcod_livro()
    {
        return $this->cod_livro;
    }

    public function setcod_livro($name)
    {
        $this->cod_livro = $name;
    }


    public function gettitulolivro()
    {
        return $this->titulolivro;
    }

    public function settitulolivro($titulinho)
    {
        $this->titulolivro = $titulinho;
    }



    public function getisbn()
    {
        return $this->isbn;
    }

    public function setisbn($isbnzinho)
    {
        $this->isbn = $isbnzinho;
    }


    public function getcategoria()
    {
        return $this->categoria;
    }

    public function setcategoria($categozinho)
    {
        $this->categoria = $categozinho;
    }

    public function getidioma()
    {
        return $this->idioma;
    }

    public function setidioma($idiomazinho)
    {
        $this->idioma = $idiomazinho;
    }




    //Prepare
    // parte 3 - métodos

    function salvar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into livro values (?,?,?,?,?)");
            @$sql->bindParam(1, $this->getcod_livro(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->gettitulolivro(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getisbn(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getcategoria(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getidioma(), PDO::PARAM_STR);


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
            $sql = $this->conn->query("Select * from livro order by cod_livro");
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
            $sql = $this->conn->prepare("delete from livro where cod_livro = ?");
            @$sql->bindParam(1, $this->getcod_livro(), PDO::PARAM_STR);

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
            $sql = $this->conn->prepare("Select * from livro where titulolivro like ?");
            @$sql->bindParam(1, $this->gettitulolivro(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("Select * from livro where cod_livro = ? ");
            @$sql->bindParam(1, $this->getcod_livro(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("update livro set titulolivro = ?,  isbn = ?, categoria = ?, idioma = ?
                      where cod_livro = ?");
            @$sql->bindParam(1, $this->gettitulolivro(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getisbn(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getcategoria(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getidioma(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getcod_livro(), PDO::PARAM_STR);

            $sql->execute();
            if ($sql->execute() == 1) {

                $successMessage = "Registro alterado com sucesso!";
                echo "<script>alert('$successMessage');</script> ";

            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao alterar registro. " . $exc->getMessage();
        } catch (Exception $exc) {
            $Message = "Erro ao Alterar Registro";
            echo "<script>alert('$Message');</script> " . $exc->getMessage();
        }


    }

}

?>