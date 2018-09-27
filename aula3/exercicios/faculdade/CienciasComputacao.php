<?php

class CienciasComputacao extends Curso
{
    public function __construct()
    {
        $nome = 'Ciências da computação';
        parent::__construct($nome);
    }

    public function isMediaAritmeticaSimples()
    {
        return true;
    }

    public function getPesosNotas()
    {
        return [1, 1, 1, 1];
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
