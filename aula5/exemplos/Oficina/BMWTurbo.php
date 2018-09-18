<?php

class BMWTurbo extends BMW implements CarroTurbo
{
    protected $turbo;

    public function getTurbo()
    {
        return $this->turbo;
    }

    public function aumentarPotencia()
    {
        $this->velocidade++;
    }
}
