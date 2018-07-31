<?php

class Oficina
{
    private $carro;

    public function __construct(Veiculo $veiculo)
    {
        $this->carro = $veiculo;
    }

    public function conserte()
    {
        echo $this->carro->getMarca() . ' ' . $this->carro->getMotor();
    }
}
