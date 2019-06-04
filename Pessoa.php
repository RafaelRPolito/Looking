<?php

class Pessoa{
    private $email;
    private $senha;
    private $nomeusu;    

    
    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNomeusu() {
        return $this->nomeusu;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNomeusu($nomeusu) {
        $this->nomeusu = $nomeusu;
    }

    function __construct($email, $senha, $nomeusu) {
        $this->email = $email;
        $this->senha = $senha;
        $this->nomeusu = $nomeusu;
    }

}

