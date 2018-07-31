<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace Digitalhouse\Carrinho;

class ColecaoCarrinhoItens
{
    private $itens;

    public function adicionaItem(CarrinhoItem $item)
    {
        $this->itens[] = $item;
    }

    public function getItens()
    {
        return $this->itens;
    }
}
