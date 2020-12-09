<?php
include_once('Pagamento.php');

class Cartao_Credito extends Pagamento
{
    private $num_cartao;
    private $cod_seg;
    private $validade;
    private $n_parcelas;
    private $vlr_parcelas;
    private $vencimento;

    public function getNum_cartao()
    {
        return $this->num_cartao;
    }
    public function getCod_seg()
    {
        return $this->cod_seg;
    }
    public function getValidade()
    {
        return $this->validade;
    }
    public function getN_parcelas()
    {
        return $this->n_parcelas;
    }
    public function getVlr_parcelas()
    {
        return $this->vlr_parcelas;
    }
    public function getVencimento()
    {
        return $this->vencimento;
    }
    public function setNum_carta($num_cartao)
    {
        $this->num_cartao = $num_cartao;
    }
    public function setCod_seg($cod_seg)
    {
        $this->cod_seg = $cod_seg;
    }
    public function setValidade($validade)
    {
        $this->validade = $validade;
    }
    public function setN_parcelas($n_parcelas)
    {
        $this->n_parcelas = $n_parcelas;
    }
    public function setVlr_parcelas($vlr_parcelas)
    {
        $this->vlr_parcelas = $vlr_parcelas;
    }
    public function setVencimento($vencimento)
    {
        $this->vencimento = $vencimento;
    }
}
