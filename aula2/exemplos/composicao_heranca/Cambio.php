<?php

abstract class Cambio
{
    protected $quantidadeMarchas;

    public function __construct($quantidadeMarchas)
    {
        $this->quantidadeMarchas = $quantidadeMarchas;
    }
}
