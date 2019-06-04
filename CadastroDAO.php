<?php

class CadastroDAO {

    function inserir($nome, $tipo, $ano, $descricao, $nota, $id) {

        try {
            $conn = new PDO("mysql:host=localhost;dbname=bd_looking", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('INSERT INTO produto (nome, tipo, ano, descricao, nota, Codusuario) VALUES(:nome, :tipo, :ano, :descricao, :nota, :usuario)');
            $stmt->execute(array(':nome' => "$nome", ':tipo' => "$tipo", ':ano' => "$ano", ':descricao' => "$descricao", ':nota' => "$nota", ':usuario' => "$id"));
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function cadastro($email, $senha, $nomeusu) {

        try {
            $conn = new PDO("mysql:host=localhost;dbname=bd_looking", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('INSERT INTO usuario (email, senha, nome) VALUES(:email, :senha, :nome)');
            $stmt->execute(array(':email' => "$email", ':senha' => "$senha", ':nome' => "$nomeusu"));
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

}
