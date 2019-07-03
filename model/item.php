<?php

class Item
{
    private $veiculo;
    private $dataInicial;
    private $dataFinal;
    private $valorTotal;

    public function Item($veiculo, $dataInicial, $dataFinal, $valorTotal)
    {
        $this->veiculo     = $veiculo;
        $this->dataInicial = $dataInicial;
        $this->dataFinal   = $dataFinal;
        $this->valorTotal  = $valorTotal;
    }

    public function getVeiculo()
    {
        return $this->veiculo;
    }

    public function setVeiculo($veiculo)
    {
        $this->veiculo = $veiculo;

    }

    public function getDataInicial()
    {
        return $this->dataInicial;
    }

    public function setDataInicial($dataInicial)
    {
        $this->dataInicial = $dataInicial;

    }

    public function getDataFinal()
    {
        return $this->dataFinal;
    }

    public function setDataFinal($dataFinal)
    {
        $this->dataFinal = $dataFinal;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;
    }
}
