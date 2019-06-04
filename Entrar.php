<?php
/*
session_start();
include('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

        $query = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = '{$senha}'";
        $result = mysqli_query($conection, $query);
        $busca = mysqli_num_rows($result);
        $linha = mysqli_fetch_assoc($result);
        
        if ($busca > 0)
            { 
            $_SESSION['usuario'] = $linha['idusuario'];
            $_SESSION['nome'] = $linha['nome'];
            $_SESSION['email'] = $linha['email'];
         
            header('Location: ../view/avaliacao.php');
            exit;
            }
          else
            {
            header('Location: ../view/login.php');
            }*/


class Entrar{
    
    private $email;
    private $senha;
    
    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function __construct($email, $senha) {
        $this->email = $email;
        $this->senha = $senha;
    }

    
}

?>
