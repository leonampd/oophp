<?php

class CaixaEletronico24horas extends CaixaEletronico
{
    protected function validarCartao()
    {
        parent::validarCartao();

        $time = new DateTime('now');
        $horaLimite = new DateTime('2018-08-09 17:00:00');
        if ($time > $horaLimite) {
            return false;
        }

        return true;
    }

    public function saque()
    {
        return parent::saque();
    }
}
