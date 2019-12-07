<?php

class CalculadoraSalarioPorBonus extends CalculadoraSalario
{
    private $bateuMeta;
    private $valorBonus = 5000.00;

    public function __construct(bool $xBateuMeta)
    {
        $this->bateuMeta = $xBateuMeta;
    }

    public function calcularSalario(): float
    {
        $salarioBase = parent::calcularSalario();

        if ($this->bateuMeta === true) {
            return $salarioBase + $this->valorBonus;
        } else {
            return $salarioBase;
        }
    }
}