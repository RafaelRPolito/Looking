<?php

include ('../model/cadastroDAO.php');
include ('../model/Produto.php');

$bavaliacao = $_POST['bavaliacao'];
$cadastro = new CadastroDAO();

if($bavaliacao=="Cadastrar") {
$produto = new Produto( $_POST['nomeProduto'], $_POST['Tipo'], $_POST['ano'], $_POST['descricao'], $_POST['nota'], $_POST['usuario']);
$cadastro->inserir($produto->getNome(), $produto->getTipo(),  $produto->getAno(), $produto->getDescricao(), $produto->getNota(), $produto->getId());

header('Location: http://localhost/Looking/view/avaliacao.php'); 
} else {
    echo"erro no cadastro";
}
