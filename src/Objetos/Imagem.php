<?php

class Imagem
{
    private $id;
    private $id_produto;
    private $file;
    private $desc;

    public function getId()
    {
        return $this->id;
    }
    public function getId_produto()
    {
        return $this->id_produto;
    }
    public function getFile()
    {
        return $this->file;
    }
    public function getDesc()
    {
        return $this->desc;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setId_produto($id_produto)
    {
        $this->id_produto = $id_produto;
    }
    public function setFile($file)
    {
        $this->file = $file;
    }
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }
}
