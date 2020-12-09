<?php

class Pagamento
{
    private $id;
    private $data_cadastro;
    private $titular;
    private $cpf_titular;

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
