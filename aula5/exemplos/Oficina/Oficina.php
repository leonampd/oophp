<?php

class Oficina
{
    private $carro;


    public function consertar(Carro $carro)
    {
        echo $carro->getCor() . PHP_EOL . $carro->getModelo() . PHP_EOL . $carro->getAno() . PHP_EOL;
    }

    public function aumentarPotencia(CarroTurbo $carroTurbo)
    {
        for ($i = 0; $i < 10; $i++) {
            $carroTurbo->aumentarPotencia();
        }
        echo $carroTurbo->getVelocidade();
    }
}
