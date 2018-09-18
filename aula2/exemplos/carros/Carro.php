<?php

class Carro
{
    public $motor;
    public $rodas;

    public function __construct($motor, $rodas)
    {
        $this->motor = $motor;
        $this->rodas = $rodas;
    }

    public function andar()
    {
    }
    public function frear()
    {
    }
}
