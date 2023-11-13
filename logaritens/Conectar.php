<?php

class Conectar extends PDO{

    private static $instancia;
    private $query;
    private $host = "127.0.0.1"; //Endereço do Servidor da Etec
    private $usuario = "root"; //Usuário do Servidor da Etec
    private $senha = ""; //Senha do Servidor da Etec
    private $db = "exemplocurso"; //Banco de Dados


    public function __construct()
    {
        parent::__construct("mysql:host=$this->host;
        dbname=$this->db",
        "$this->usuario",
        "$this->senha");

    }

    public static function getInstance()
    {
        if(!isset(self::$instancia))
        {
            try{
                self::$instancia = new Conectar;
                echo 'Conectado com Sucesso!!';
            }
            catch(Exception $e){
                echo 'Erro ao Conectar';
                exit();
            }
        }
        return self::$instancia;
    }

    public function sql($query)
    {
        $this->getInstance();
        $this->query = $query;
        $stmt-> $pdo->prepare($this->query);
        $stmt-> execute();
        $pdo = null;
    }

}
?>