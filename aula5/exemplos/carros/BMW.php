<?php

class BMW implements Veiculo
{
    private $marca;
    private $motor;

    public function __construct($marca, $motor)
    {
        $this->marca = $marca;
        $this->motor = $motor;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getMotor(){
        return $this->motor;
    }
}