<?php
namespace Digitalhouse\Carrinho;

use \Digitalhouse\Cliente;

class CarrinhoCompras
{
    private $cliente;
    private $itens;
    public function __construct(Cliente $cliente, $itens)
    {
        $this->cliente = $cliente;
        $this->itens = $itens;
    }

    public function listar()
    {
        foreach ($this->itens as $item) {
            $produto = $item->getProduto();
            echo $produto->getNome() . '<br>';
        }
    }

    public function getQuantidadeItens()
    {
        return count($this->itens);
    }

    public function valorTotal()
    {
        $valorTotal = 0;
        foreach ($this->itens as $item) {
            $valorTotal = $valorTotal + $item->getTotalItem();
        }

        return $valorTotal;
    }

    public function getCliente()
    {
        return $this->cliente;
    }
}
