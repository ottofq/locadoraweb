<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '\locadoraweb\model\\';
$file = $path . 'veiculo.php';
require_once($file);
//require_once '../model/veiculo.php';
require_once 'conexao.php';

class VeiculoDAO
{
    private $con;

    public function VeiculoDAO()
    {
        $c         = new Conexao();
        $this->con = $c->getConexao();
    }

    public function incluirVeiculo(Veiculo $veiculo)
    {
        $sql = $this->con->prepare("insert into veiculos(placa,modelo,anoFabricacao,fabricante,opcionais,motorizacao,valorBase,id_categoria) values (:placa,:modelo,:ano,:fabricante,:opcionais,:motorizacao,:valor,:categoria)");

        $sql->bindValue(':placa', $veiculo->getPlaca());
        $sql->bindValue(':modelo', $veiculo->getModelo());
        $sql->bindValue(':ano', $veiculo->getAnoFabricacao());
        $sql->bindValue(':fabricante', $veiculo->getFabricante());
        $sql->bindValue(':opcionais', $veiculo->getOpcionais());
        $sql->bindValue(':motorizacao', $veiculo->getMotorizacao());
        $sql->bindValue(':valor', $veiculo->getValorBase());
        $sql->bindValue(':categoria', $veiculo->getCategoria());

        $sql->execute();

    }

    public function getVeiculos()
    {
        $rs = $this->con->query("SELECT * FROM veiculos");

        $lista = array();

        while ($veiculo = $rs->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $veiculo;
        }
        return $lista;
    }

    public function getVeiculosPorModelo($modelo) {
        $sql = $this->con->prepare("SELECT * FROM veiculos WHERE modelo LIKE :modelo");
        $sql->bindValue(':modelo', $modelo.'%');
        $rs = $sql->execute();

        $lista = array();

        while ($veiculo = $rs->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $veiculo;
        }
        return $lista;
    }

    public function getVeiculosPorFabricante($fabricante) {
        $sql = $this->con->prepare("SELECT * FROM veiculos WHERE fabricante LIKE :fabricante");
        $sql->bindValue(':fabricante', $fabricante.'%');
        $rs = $sql->execute();

        $lista = array();

        while ($veiculo = $rs->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $veiculo;
        }
        return $lista;
    }

    public function getVeiculosPorPlaca($placa) {
        $sql = $this->con->prepare("SELECT * FROM veiculos WHERE placa LIKE :placa");
        $sql->bindValue(':placa', $placa.'%');
        $rs = $sql->execute();

        $lista = array();

        while ($veiculo = $rs->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $veiculo;
        }
        return $lista;
    }

    public function getVeiculosPorMotorizacao($motorizacao) {
        $sql = $this->con->prepare("SELECT * FROM veiculos WHERE motorizacao LIKE :motorizacao");
        $sql->bindValue(':motorizacao', $motorizacao.'%');
        $rs = $sql->execute();

        $lista = array();

        while ($veiculo = $rs->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $veiculo;
        }
        return $lista;
    }

    public function excluirVeiculo($placa)
    {
        $sql = $this->con->prepare("DELETE FROM veiculos WHERE placa = :placa");

        $sql->bindValue(':placa', $placa);
        $sql->execute();
    }

    public function atualizarVeiculo(Veiculo $veiculo)
    {
        $sql = $this->con->prepare("UPDATE veiculos SET placa = :placa, modelo = :modelo, anoFabricacao = :ano, fabricante = :fabricante, opcionais = :opcionais, motorizacao = :motorizacao, valorBase = :valor, id_Categoria = :categoria WHERE placa = :placa");

        $sql->bindValue(':placa', $veiculo->getPlaca());
        $sql->bindValue(':modelo', $veiculo->getModelo());
        $sql->bindValue(':ano', $veiculo->getAnoFabricacao());
        $sql->bindValue(':fabricante', $veiculo->getFabricante());
        $sql->bindValue(':opcionais', $veiculo->getOpcionais());
        $sql->bindValue(':motorizacao', $veiculo->getMotorizacao());
        $sql->bindValue(':valor', $veiculo->getValorBase());
        $sql->bindValue(':categoria', $veiculo->getCategoria());

        $sql->execute();

    }

    public function getVeiculo($placa)
    {
        $sql = $this->con->prepare('SELECT * FROM veiculos WHERE placa= :placa');

        $sql->bindValue(':placa', $placa);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }
}
