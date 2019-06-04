<?php

include ('../model/cadastroDAO.php');
include ('../model/Produto.php');
include ('../model/Pessoa.php');
include ('../model/Entrar.php');


$bavaliacao = $_POST['bavaliacao'];
$bcadastro = $_POST['bcadastro'];
$bentra = $_POST['bentra'];

$cadastro = new CadastroDAO();





if($bavaliacao=="Cadastrar") {
$produto = new Produto( $_POST['nomeProduto'], $_POST['Tipo'], $_POST['ano'], $_POST['descricao'], $_POST['nota'], $_POST['usuario']);
$cadastro->inserir($produto->getNome(), $produto->getTipo(),  $produto->getAno(), $produto->getDescricao(), $produto->getNota(), $produto->getId());

header('Location: http://localhost/Looking/view/avaliacao.php'); 
} else {
    echo"erro no cadastro do filme ";
}

if($bcadastro=="Cadastrar"){
$pessoa = new Pessoa( $_POST['email'], $_POST['senha'], $_POST['nomePessoa']);
$cadastro->cadastro($pessoa->getEmail(), $pessoa->getSenha(), $pessoa->getNomeusu());
header('Location: http://localhost/Looking/view/login.php');
} else {
    echo"erro no cadastro";
}

if($bentra=="Entrar"){
$entrar = new Entrar( $_POST['email'], $_POST['senha']);
$cadastro->login($entrar->getEmail(), $entrar->getSenha());
} else {
    echo"erro no login";
}


