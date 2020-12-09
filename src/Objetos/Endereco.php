<?php

class Endereco
{
    private $id;
    private $logradouro;
    private $bairro;
    private $cidade;
    private $estado;
    private $complemento;

    public function getId()
    {
        return $this->id;
    }
    public function getLogadouro()
    {
        return $this->logradouro;
    }
    public function getBairro()
    {
        return $this->bairro;
    }
    public function getCidade()
    {
        return $this->cidade;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function getComplemento()
    {
        return $this->complemento;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setLogadouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }
}
