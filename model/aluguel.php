<?php
class Aluguel
{
    private $id_locacao;
    private $dataInicial;
    private $dataFinal;
    private $valor_total;
    private $cpf_socio;
    private $id_veiculo;

    public function Aluguel($dataInicial, $dataFinal, $valor_total, $cpf_socio, $id_veiculo)
    {
        $this->dataInicial = $dataInicial;
        $this->dataFinal   = $dataFinal;
        $this->valor_total = $valor_total;
        $this->cpf_socio   = $cpf_socio;
        $this->id_veiculo  = $id_veiculo;

    }

    public function getId_locacao()
    {
        return $this->id_locacao;
    }

    public function getDataInicial()
    {
        return $this->dataInicial;
    }

    public function setDataInicial($dataInicial)
    {
        $this->dataInicial = $dataInicial;

        return $this;
    }

    public function getDataFinal()
    {
        return $this->dataFinal;
    }

    public function setDataFinal($dataFinal)
    {
        $this->dataFinal = $dataFinal;

        return $this;
    }

    public function getValor_total()
    {
        return $this->valor_total;
    }

    public function setValor_total($valor_total)
    {
        $this->valor_total = $valor_total;
    }

    public function getCpf_socio()
    {
        return $this->cpf_socio;
    }

    public function setCpf_socio($cpf_socio)
    {
        $this->cpf_socio = $cpf_socio;

    }

    public function getId_veiculo()
    {
        return $this->id_veiculo;
    }

    public function setId_veiculo($id_veiculo)
    {
        $this->id_veiculo = $id_veiculo;

    }
}
