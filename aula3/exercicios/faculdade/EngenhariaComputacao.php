<?php

class EngenhariaComputacao extends Curso
{
    public function __construct()
    {
        $nome = 'Engenharia da computação';
        parent::__construct($nome);
    }

    public function isMediaAritmeticaSimples()
    {
        return false;
    }

    public function getPesosNotas()
    {
        return [1, 2, 1, 2];
    }

    public function getMedia()
    {
        return 7;
    }

    public function getMinimoAprovacaoSemestre()
    {
        return 5;
    }
}
