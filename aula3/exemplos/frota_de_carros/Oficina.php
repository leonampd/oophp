<?php

class Oficina
{
    private $veiculoASerConsertado;

    public function __construct($veiculoASerArrumado)
    {
        $this->veiculoASerConsertado = $veiculoASerArrumado;
    }

    public function arrumar()
    {
        if (strlen($this->veiculoASerConsertado->getPlaca()) === 8) {
            echo 'Ola seu veículo, da placa ' . $this->veiculoASerConsertado->getPlaca() . ' vai ser arrumado';
        } else {
            echo 'Seu veículo n consigo arrumar';
        }
    }
}
