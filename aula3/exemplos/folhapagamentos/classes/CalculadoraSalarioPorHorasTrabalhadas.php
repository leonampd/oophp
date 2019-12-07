<?php

class CalculadoraSalarioPorHorasTrabalhadas extends CalculadoraSalario
{
    private $valorHora = 40;
    private $quantidadeHorasTrabalhadas;

    public function __construct(float $xQuantidadeHorasTrabalhadas)
    {
        $this->quantidadeHorasTrabalhadas = $xQuantidadeHorasTrabalhadas;
    }

    public function calcularSalario(): float
    {
        $salarioBase = parent::calcularSalario();

        $salarioTotal = $salarioBase + ($this->valorHora * $this->quantidadeHorasTrabalhadas);

        return $salarioTotal - ($salarioTotal * $this->getTaxaDesconto() / 100);
    }
}