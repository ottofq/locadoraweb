<?php
require_once '../model/aluguel.php';
require_once 'conexao.php';

class AluguelDAO
{

    private $con;

    public function AluguelDAO()
    {
        $c         = new Conexao();
        $this->con = $c->getConexao();
    }

    public function converteDataMysql($data)
    {
        return date('Y-m-d', $data);
    }

    public function IncluirAluguel(Aluguel $aluguel)
    {
        $sql = $this->con->prepare("INSERT INTO locacao(dataInicial,dataFinal,valor_total,cpf_socio,id_veiculo) VALUES(:dataInicial,:dataFinal,:valor_total,:cpf_socio,:id_veiculo)");

        $sql->bindValue(':dataInicial', $aluguel->getDataInicial());
        $sql->bindValue(':dataFinal', $aluguel->getDataFinal());
        $sql->bindValue(':valor_total', $aluguel->getValor_total());
        $sql->bindValue(':cpf_socio', $aluguel->getCpf_socio());
        $sql->bindValue(':id_veiculo', $aluguel->getId_veiculo());

        $sql->execute();
    }

}
