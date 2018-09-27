<?php

abstract class Curso
{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    abstract public function isMediaAritmeticaSimples();

    abstract public function getPesosNotas();

    abstract public function getMedia();

    abstract public function getMinimoAprovacaoSemestre();
}
