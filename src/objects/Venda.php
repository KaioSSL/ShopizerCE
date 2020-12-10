<?php

class Venda
{
    private $id;
    private $data_cadastro;
    private $descontos;
    private $vlr_total;
    private $id_cliente;
    private $id_pagamento;

    public function getId()
    {
        return $this->id;
    }
    public function getData_cadastro()
    {
        return $this->data_cadastro;
    }
    public function getDescontos()
    {
        return $this->descontos;
    }
    public function getVlr_total()
    {
        return $this->vlr_total;
    }
    public function getId_cliente()
    {
        return $this->id_cliente;
    }
    public function getId_pagamento()
    {
        return $this->id_pagamento;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setData_cadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
    }
    public function setDescontos($descontos)
    {
        $this->descontos = $descontos;
    }
    public function setVlr_total($vlr_total)
    {
        $this->vlr_total = $vlr_total;
    }
    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }
    public function setId_pagamento($id_pagamento)
    {
        $this->id_pagamento = $id_pagamento;
    }
}
