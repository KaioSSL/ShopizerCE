<?php
include_once('Pagamento.php');

class Cartao_Credito
{
    private $id;
    private $data_cadastro;
    private $titular;
    private $cpf_titular;
    private $num_cartao;
    private $cod_seg;
    private $validade;
    private $id_cliente;
    
    public function getId_cliente(){
        return $this->id_cliente;
    }
    public function setId_cliente($id_cliente){
        $this->id_cliente = $id_cliente;
    }
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
}
