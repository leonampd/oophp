<?php

class Designer implements Colaborador
{
    private $salarioBase = 2000;
    private $valorHoraExtra = 50;
    private $horasExtrasFeitas;
    public function __construct($horasExtras)
    {
        $this->horasExtrasFeitas = $horasExtras;
    }

    public function salario()
    {
        return $this->salarioBase + ($this->valorHoraExtra *$this->horasExtrasFeitas);
    }
}