<?php
class Veiculo
{
    private $placa;
    private $modelo;
    private $anoFabricacao;
    private $fabricante;
    private $opcionais;
    private $motorizacao;
    private $valorBase;
    private $categoria;

    public function Veiculo($modelo, $anoFabricacao, $fabricante, $opcionais, $motorizacao, $valorBase, $categoria)
    {
        $this->modelo        = $modelo;
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

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setNome($modelo)
    {
        $this->modelo = $modelo;
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
