<?php
class Cliente
{
    private $id;
    private $cpf;
    private $nome;
    private $login;
    private $senha;
    private $email;
    private $nasc;
    private $cadastro;

    public function __construct($id,$cpf,$nome,$login,$senha,$email,$nasc)
    {
        $this->setId($id);
        $this->setCPF($cpf);
        $this->setNome($nome);
        $this->setLogin($login);
        $this->setSenha($senha);
        $this->setEmail($email);
        $this->setNasc($nasc);
        
    }
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getCPF()
    {
        return $this->cpf;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getNasc()
    {
        return $this->nasc;
    }
    public function getCadastro()
    {
        return $this->cadastro;
    }

    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setNasc($nasc)
    {
        $this->nasc = $nasc;
    }
    public function setCadastro($cadastro)
    {
        $this->cadastro = $cadastro;
    }
}
