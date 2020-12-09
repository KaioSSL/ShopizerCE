<?php
include_once('Pagamentos.php');
class Boleto
{
    private $vencimento;
    private $cod_barras;

    public function getVencimento()
    {
        return $this->vencimento;
    }
    public function getCod_barras()
    {
        return $this->cod_barras;
    }
    public function setVencimento($vencimento)
    {
        $this->vencimento = $vencimento;
    }
    public function setCod_barras($cod_barras)
    {
        $this->cod_barras = $cod_barras;
    }
}
