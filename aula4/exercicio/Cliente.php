<?php

class Cliente
{
    protected $nome;
    protected $sobrenome;

    public function __construct($nome, $sobrenome)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    public function getNomeCompleto()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }
}
