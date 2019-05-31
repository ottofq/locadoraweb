<?php

class Cliente
{
    private $nome;
    private $cpf;
    private $rg;
    private $endereco;
    private $telefone;
    private $email;

    public function Cliente($nome, $cpf, $rg, $endereco, $telefone, $email)
    {
        $this->nome = $nome;
        $this->cpf  = $cpf;
        $this->rg   = $rg;
        $this->endereco;
        $this->telefone = $telefone;
        $this->email    = $email;
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
}
