<?php
class Veiculo
{
    private $placa;
    private $nome;
    private $anoFabricacao;
    private $fabricante;
    private $opcionais;
    private $motorizacao;
    private $valorBase;
    private $categoria;

    public function Veiculo($placa, $nome, $anoFabricacao, $fabricante, $opcionais, $motorizacao, $valorBase, $categoria)
    {
        $this->placa         = $placa;
        $this->nome          = $nome;
        $this->anoFabricacao = $anoFabricacao;
        $this->fabricante    = $fabricante;
        $this->opcionais     = $opcionais;
        $this->motorizacao   = $motorizacao;
        $this->valorBase     = $valorBase;
        $this->categoria     = $categoria;
    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao($ano)
    {
        $this->anoFabricacao = $ano;
    }

    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;
    }

    public function getOpcionais()
    {
        return $this->opcionais;
    }

    public function setOpcionais($opcionais)
    {
        $this->opcionais = $opcionais;
    }

    public function getMotorizacao()
    {
        return $this->motorizacao;
    }

    public function setMotorizacao($motorizacao)
    {
        $this->motorizacao = $motorizacao;
    }

    public function getValorBase()
    {
        return $this->valorBase;
    }

    public function setValorBase($valor)
    {
        $this->valorBase = $valor;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

}
