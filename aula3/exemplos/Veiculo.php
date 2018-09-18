<?php

abstract class Veiculo
{
    public $motor;
    public $cor;
    public $modelo;
    public $placa;

    abstract public function acelerar();

    public function frear()
    {
        return 'estou freando';
    }
    public function bater()
    {
    }
}
