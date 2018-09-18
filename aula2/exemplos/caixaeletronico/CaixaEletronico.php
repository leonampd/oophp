<?php

class CaixaEletronico
{
    public $cartao;

    public function __construct($cartao)
    {
        $this->cartao = $cartao;
    }

    public function saque()
    {
        if ($this->cartao ... cartao valido) {
            return 100;
        }
    }

    public function deposito()
    {
    }

    public function transferencia()
    {
    }
}
