<?php

// Classe de conexão
class Conexao
{
    // Atributos privados
    private $servidor;
    private $usuario;
    private $senha;
    private $banco;
    private static $pdo;


    // Metodo construtor
    public function __construct()
    {
        $this->servidor = "localhost";
        $this->usuario  = "root";
        $this->senha    = "";
        $this->banco    = "estoque";
    }

    // Metodo para conectar
    public function conectar()
    {
        try
        {
            if (is_null(self::$pdo))
            {
                $pdo = new PDO("mysql:host=".$this->servidor.":dbname=".$this->banco, $this->usuario, $this->senha);
            }
            return self::$pdo;
        }
        catch(PDOException $erro)
        {
            echo 'Error'.$erro->getMessage();
        }
    }
}