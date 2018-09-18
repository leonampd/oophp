<?php

abstract class Carro
{
    protected $cor;
    protected $ano;
    protected $modelo;

    protected $velocidade;

    public function __construct($cor, $ano, $modelo)
    {
        $this->cor = $cor;
        $this->ano = $ano;
        $this->modelo = $modelo;
        $this->velocidade = 0;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getVelocidade()
    {
        return $this->velocidade;
    }
}
