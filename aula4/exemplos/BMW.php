<?php

class BMW extends Carro
{
    private $serie;

    public function getSerie()
    {
        return $this->serie;
    }

    public function setSerie($serie)
    {
        $this->serie = $serie;
    }
}
