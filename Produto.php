<?php

class Produto{
    private $nome;
    private $tipo;
    private $ano;
    private $descricao;
    private $nota;
    private $id;
    
    function getNome() {
        return $this->nome;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getAno() {
        return $this->ano;
    }
    
    function getDescricao() {
        return $this->descricao;
    }

    function getNota() {
        return $this->nota;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    function setNota($nota) {
        $this->nota = $nota;
    }
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

        function __construct($nome, $tipo, $ano, $descricao, $nota, $id) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->ano = $ano;
        $this->descricao = $descricao;
        $this->nota = $nota;
        $this->id = $id;
    }


}