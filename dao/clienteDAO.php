<?php
require_once '../model/cliente.php';
require_once 'conexao.php';

class ClienteDAO
{

    private $con;

    public function ClienteDAO()
    {
        $c         = new Conexao();
        $this->con = $c->getConexao();
    }

    public function incluirCliente(Cliente $cliente)
    {
        try {
            $sql = $this->con->prepare("insert into socios(cpf,cnh,nome,rg,endereco,telefone,email,senha,admin) values (:cpf,:cnh,:nome,:rg,:endereco,:telefone,:email,:senha,0)");

            $sql->bindValue(':cpf', $cliente->getCpf());
            $sql->bindValue(':cnh', $cliente->getCNH());
            $sql->bindValue(':nome', $cliente->getNome());
            $sql->bindValue(':rg', $cliente->getRg());
            $sql->bindValue(':endereco', $cliente->getEndereco());
            $sql->bindValue(':telefone', $cliente->getTelefone());
            $sql->bindValue(':email', $cliente->getEmail());
            $sql->bindValue(':senha', $cliente->getSenha());

            $sql->execute();
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }
    public function getClientes()
    {
        $rs = $this->con->query("SELECT * FROM socios");

        $lista = array();

        while ($cliente = $rs->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $cliente;
        }
        return $lista;
    }

    public function excluirCliente($cpf)
    {
        $sql = $this->con->prepare("DELETE FROM socios WHERE cpf = :cpf");

        $sql->bindValue(':cpf', $cpf);
        $sql->execute();
    }

    public function atualizarCliente(Cliente $cliente)
    {
        $sql = $this->con->prepare("UPDATE socios SET cpf = :cpf,cnh = :cnh nome = :nome, rg = :rg, endereco = :endereco, telefone = :telefone, email = :email, senha = :senha WHERE cpf = :cpf");

        $sql->bindValue(':cpf', $cliente->getCpf());
        $sql->bindValue(':cnh', $cliente->getCNH());
        $sql->bindValue(':nome', $cliente->getNome());
        $sql->bindValue(':rg', $cliente->getRg());
        $sql->bindValue(':endereco', $cliente->getEndereco());
        $sql->bindValue(':telefone', $cliente->getTelefone());
        $sql->bindValue(':email', $cliente->getEmail());
        $sql->bindValue(':email', $cliente->getSenha());

        $sql->execute();

    }

    public function getCliente($cpf)
    {
        $sql = $this->con->prepare('SELECT * FROM socios WHERE cpf= :cpf');

        $sql->bindValue(':cpf', $cpf);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function getClientePorEmail($email)
    {
        $sql = $this->con->prepare('SELECT * FROM socios WHERE email= :email');

        $sql->bindValue(':email', $email);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function autentica($email, $senha)
    {
        $sql = $this->con->prepare("SELECT * FROM socios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) { // verifica se a consulta retorna algo
            return $sql->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }
}
