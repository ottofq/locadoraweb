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
        $sql = $this->con->prepare("insert into socios(cpf, nome, rg, endereco, telefone, email) values (:cpf,:nome,:rg,:endereco,:telefone,:email)");

        $sql->bindValue(':cpf', $cliente->getCpf());
        $sql->bindValue(':nome', $cliente->getNome());
        $sql->bindValue(':rg', $cliente->getRg());
        $sql->bindValue(':endereco', $cliente->getEndereco());
        $sql->bindValue(':telefone', $cliente->getTelefone());
        $sql->bindValue(':email', $cliente->getEmail());

        $sql->execute();
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
        $sql = $this->con->prepare("UPDATE socios SET cpf = :cpf, nome = :nome, rg = :rg, endereco = :endereco, telefone = :telefone, email = :email WHERE cpf = :cpf");

        $sql->bindValue(':cpf', $cliente->getCpf());
        $sql->bindValue(':nome', $cliente->getNome());
        $sql->bindValue(':rg', $cliente->getRg());
        $sql->bindValue(':endereco', $cliente->getEndereco());
        $sql->bindValue(':telefone', $cliente->getTelefone());
        $sql->bindValue(':email', $cliente->getEmail());

        $sql->execute();

    }

    public function getCliente($cpf)
    {
        $sql = $this->con->prepare('SELECT * FROM socios WHERE cpf= :cpf');

        $sql->bindValue(':cpf', $cpf);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }
}
