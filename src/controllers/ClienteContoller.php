<?php
include_once('../objects/ClienteDAO.php');
/* Responsável por receber toda requisição sobre Clientes e trata-las*/
$requisicao = $_REQUEST['requisicao'];
$cpf = $_REQUEST['cpf'];
$nome = $_REQUEST['nome'];
$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];
$email = $_REQUEST['email'];
$nasc = $_REQUEST['nasc'];
if ($requisicao == 'insert') {
    $cliente = null;
    try {
        $cliente = new ClienteDAO(null,$cpf, $nome, $login, $senha, $email, $nasc);
        $cliente->insert();
        echo 'Cliente cadastrado com Sucesso ! :D';
    } catch (Exception $e) {
        echo 'Tratar Exceção ' . $e->getMessage();
    }
} elseif ($requisicao == 'update') {
    $cliente = null;
    $id = $_REQUEST['id'];
    try{
        $cliente = new ClienteDAO($id,$cpf, $nome, $login, $senha, $email, $nasc);
        $cliente->update();
        echo 'Cliente atualizado com Sucesso ! :D';
    }catch(Exception $e){
        echo 'Tratar Exceção ' . $e->getMessage();
    }
} elseif ($requisicao == 'delete') {
    $cliente = null;
    $id = $_REQUEST['id'];
    try{
        $cliente = new ClienteDAO($id,$cpf, $nome, $login, $senha, $email, $nasc);
        $cliente->delete();
        echo 'Cliente deletado com Sucesso ! :(';
    }catch(Exception $e){
        echo 'Tratar Exceção '. $e->getMessage();
    }
}
