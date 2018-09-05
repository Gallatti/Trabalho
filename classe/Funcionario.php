<?php

    require_once "Conexao.php";
    require_once "Funcoes.php";

class Funcionario
{
    private $con;
    private $objfunc;
    private $idFuncionario;
    private $nome;
    private $email;
    private $senha;
    private $dataCadastro;

    public function __construct()
    {
        $this->con = new Conexao();
        $this->objfunc = new Funcoes();
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function Seleciona($dado)
    {
        try
        {
            $this->idFuncionario = $this->objfunc->base64($dado, 2);
            $cst = $this->con->conectar() ->prepare("SELECT 'id', 'nome', 'email', 'dataCadastro' FROM 'funcionarios' WHERE 'idFuncionario' = :idFunc;");
            $cst->bindParam(":idFunc", $this->idFuncionario, PDO::PARAM_INT);
            $cst->excute();
            return $cst->fetch();
        }
        catch(PDOException $ex)
        {
            return 'error'; $ex->getMessage();
        }
    }

    public function Select()
    {
        try
        {

        }
        catch(PDOException $ex)
        {

        }
    }

    public function Insere($dados)
    {
        try
        {

        }
        catch(PDOException $ex)
        {

        }
    }

    public function Altera($dados)
    {
        try
        {

        }
        catch(PDOException $ex)
        {

        }
    }

    public function Exclui($dado)
    {
        try
        {

        }
        catch(PDOException $ex)
        {

        }
    }
}