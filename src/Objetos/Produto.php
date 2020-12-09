<?php
class Produto
{
    private $id;
    private $desc;
    private $desc_det;
    private $altura;
    private $comprimento;
    private $peso;
    private $largura;
    private $complemento;
    private $categoria;

    public function Produto()
    {
    }

    public function getId()
    {
        return $this->id;
    }
    public function getDesc()
    {
        return $this->desc;
    }
    public function getDesc_det()
    {
        return $this->desc_det;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function getComprimento()
    {
        return $this->comprimento;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function getLargura()
    {
        return $this->largura;
    }
    public function getComplemento()
    {
        return $this->complemento;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }
    public function setDesc_det($desc_det)
    {
        $this->desc_det = $desc_det;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
    public function setLargura($largura)
    {
        $this->largura = $largura;
    }
}
