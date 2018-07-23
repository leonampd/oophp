<?php

class CaixaEletronico
{
    protected $cartao;

    public function __construct($card) // injecao de dependencias
    {
        $this->cartao = $card;
        echo 'estou construindo..';
    }

    public function sacar()
    {
        var_dump($this->cartao->cvv);
    }

    public function depositar()
    {
        if ($this->cartao == 'valido') {
            // operacao
        }
    }
}
