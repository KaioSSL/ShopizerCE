<?php

class Pagamento
{
    private $id;
    private $n_parcelas;
    private $vlr_parcelas;
    private $vencimento;
    private $id_cartao;
    private $id_boleto;
    private $tipo_pgto;

    
    public function getId_cartao()
    {
        return $this->id_cartao;
    }
    public function setId_cartao($id_cartao)
    {
         $this->id_cartao = $id_cartao;
    }
    public function getId_boleto()
    {
        return $this->id_boleto;
    }
    public function setId_boleto($id_boleto)
    {
         $this->id_cartao = $id_boleto;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getData_cadastro()
    {
        return $this->data_cadastro;
    }
    public function getTitular()
    {
        return $this->titular;
    }
    public function getCPF_titular()
    {
        return $this->cpf_titular;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setData_cadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
    }
    public function setTitular($titular)
    {
        $this->titular = $titular;
    }
    public function setCPF_titular($cpf_titular)
    {
        $this->cpf_titular = $cpf_titular;
    }
    public function getN_parcelas()
    {
        return $this->n_parcelas;
    }
    public function getVlr_parcelas()
    {
        return $this->vlr_parcelas;
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
    public function getVencimento()
    {
        return $this->vencimento;
    }
    public function getTipo_pgto(){
        return $this->tipo_pgto;
    }
    public function setTipo_pgto($tipo_pgto){
        $this->tipo_pgto = $tipo_pgto;
    }
}
