<?php
namespace Digitalhouse\Carrinho;

use Digitalhouse\Produto;

class CarrinhoItem
{
    private $produto;
    private $quantidadeProduto;

    public function __construct(Produto $produto, $quantidade)
    {
        $this->produto = $produto;
        $this->quantidadeProduto = $quantidade;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function getTotalItem()
    {
        return ($this->produto->getValor() + $this->produto->getValorFrete())
               *$this->quantidadeProduto;
    }
}
