<?php

class Desenvolvedor implements Colaborador
{
    private $linhasDeCodigoDigitadas;

    public function __construct($linhas)
    {
        $this->linhasDeCodigoDigitadas = $linhas;
    }

    public function salario()
    {
        return 100 * $this->linhasDeCodigoDigitadas;
    }
}