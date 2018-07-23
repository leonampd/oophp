<?php

class Carro
{
    protected $chassi;
    protected $cambio;

    public function __construct($chassi, $cambio)
    {
        $this->chassi = $chassi;
        $this->cambio = $cambio;
    }

    public function getCambio()
    {
        return $this->cambio;
    }
}
