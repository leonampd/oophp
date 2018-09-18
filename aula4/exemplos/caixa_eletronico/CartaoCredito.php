<?php

class CartaoCredito
{
    private $numero;
    private $nomeDoPortador;
    private $validade;
    private $cvv;

    public function __construct(
        $numero,
        $nome,
        $validade,
        $codigoVerificador
    ) {
        $this->validade = $validade;
        $this->nomeDoPortador = $nome;
        $this->numero = $numero;
        $this->cvv = $codigoVerificador;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getNomePortador()
    {
        return $this->nomeDoPortador;
    }
}
