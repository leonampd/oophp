<?php

class CalculadoraSalarioHorasExtras extends CalculadoraSalario
{
    private $bateuMeta;
    private $valorHora = 40;
    private $valorBonus = 5000.00;
    private $quantidadeHorasTrabalhadas;

    public function __construct(bool $xBateuMeta, float $xQuantidadeHorasTrabalhadas)
    {
        $this->bateuMeta = $xBateuMeta;
        $this->quantidadeHorasTrabalhadas = $xQuantidadeHorasTrabalhadas;
    }

    public function calcularSalario(): float
    {
        $salarioBase = parent::calcularSalario();
        $salarioCalculado = $salarioBase;

        if($this->bateuMeta) {
            $salarioCalculado += $this->valorBonus;
        }

        return $salarioCalculado + ($this->valorHora * $this->quantidadeHorasTrabalhadas);
    }
}