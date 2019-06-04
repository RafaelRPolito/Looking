<?php

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
            }
?>
