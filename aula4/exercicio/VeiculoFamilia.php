<?php

class VeiculoFamilia extends Veiculo
{
    private $assentos = 7;

    public function __construct()
    {
        $this->valorDaDiaria = 170;
    }
}
