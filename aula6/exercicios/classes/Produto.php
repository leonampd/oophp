<?php
namespace Digitalhouse;

class Produto
{
    private $nome;
    private $valor;
    private $valorFrete;
    public function __construct($nome, $valor, $valorFrete)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->valorFrete = $valorFrete;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getValorFrete()
    {
        return $this->valorFrete;
    }
}
