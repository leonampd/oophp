<?php

class CaixaEletronico
{
    private $cartaoCredito;

    public function __construct($cartao)
    {
        $this->cartaoCredito = $cartao;
    }

    protected function validarCartao()
    {
        if (strlen($this->cartaoCredito->getNumero()) < 16) {
            return false;
        }
        return true;
    }

    public function saque()
    {
        if ($this->validarCartao()) {
            return $this->cartaoCredito->getNomePortador();
        }
    }
}
