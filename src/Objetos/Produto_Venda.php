<?php

class Produto_Venda
{
    private $id;
    private $id_produto;
    private $id_venda;
    private $qtd_produto;
    private $vlr_unit;
    private $vlr_total;

    public function getId()
    {
        return $this->id;
    }
    public function getId_venda()
    {
        return $this->id_venda;
    }
    public function getId_produto()
    {
        return $this->id_produto;
    }
    public function getQtd_produto()
    {
        return $this->qtd_produto;
    }
    public function getVlr_unit()
    {
        return $this->vlr_unit;
    }
    public function getVlr_total()
    {
        return $this->vlr_total;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setId_produto($id_produto)
    {
        $this->id_produto = $id_produto;
    }
    public function setId_venda($id_venda)
    {
        $this->id_venda = $id_venda;
    }
    public function setQtd_produto($qtd_produto)
    {
        $this->qtd_produto = $qtd_produto;
    }
    public function setVlr_unit($vlr_unit)
    {
        $this->vlr_unit = $vlr_unit;
    }
    public function setVlr_total($vlr_total)
    {
        $this->vlr_total = $vlr_total;
    }
}
