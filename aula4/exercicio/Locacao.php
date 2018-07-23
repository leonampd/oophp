<?php

class Locacao
{
    protected $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function calcularValorTotal(Veiculo $carro, $quantidadeDiarias)
    {
        return $carro->getValorDaDiaria() * $quantidadeDiarias;
    }
}
