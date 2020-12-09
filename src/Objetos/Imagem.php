<?php

class Imagem
{
    private $id;
    private $id_produto;
    private $path;
    private $desc_;

    public function getId()
    {
        return $this->id;
    }
    public function getId_produto()
    {
        return $this->id_produto;
    }
    public function getPath()
    {
        return $this->path;
    }
    public function getDesc_()
    {
        return $this->desc_;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setId_produto($id_produto)
    {
        $this->id_produto = $id_produto;
    }
    public function setPath($path)
    {
        $this->path = $path;
    }
    public function setDesc_($desc_)
    {
        $this->desc_ = $desc_;
    }
}
