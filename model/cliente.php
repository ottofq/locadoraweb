<?php

class Cliente
{
    private $nome;
    private $cpf;
    private $cnh;
    private $rg;
    private $endereco;
    private $telefone;
    private $email;
    private $senha;

    public function Cliente($cpf, $cnh, $nome, $rg, $endereco, $telefone, $email, $senha)
    {
        $this->nome     = $nome;
        $this->cpf      = $cpf;
        $this->cnh      = $cnh;
        $this->rg       = $rg;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email    = $email;
        $this->senha    = $senha;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getCNH()
    {
        return $this->cnh;
    }

    public function setCNH($cnh)
    {
        $this->cnh = $cnh;

    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;

    }
}
