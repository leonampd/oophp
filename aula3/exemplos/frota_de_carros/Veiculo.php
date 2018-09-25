<?php

abstract class Veiculo
{
    private $chassi;
    private $cor;
    private $placa;

    public function __construct($chassiX, $corX, $placaX)
    {
        $this->chassi = $chassiX;
        $this->cor = $corX;
        $this->placa = $placaX;
    }

    public function getChassi()
    {
        return $this->chassi;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function andar()
    {
        echo 'Oi eu sou um veiculo de 4 rodas que anda';
    }
}
