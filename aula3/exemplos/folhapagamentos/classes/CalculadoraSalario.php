<?php

class CalculadoraSalario
{
    private $taxaDesconto = 10;

    public function calcularSalario(): float
    {
        return 1000.00;
    }

    public function getTaxaDesconto(): float
    {
        return $this->taxaDesconto;
    }
}