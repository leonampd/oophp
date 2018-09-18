<?php

class Gaiola
{
    protected $voador;
    public function __construct(AvesQueVoam $voador)
    {
        $this->voador = $voador;
    }

    public function fugir()
    {
        $this->voador->voar();
        echo 'bateu na grade';
    }
}
