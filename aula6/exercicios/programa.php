<?php
require 'vendor/autoload.php';

use Digitalhouse\Cliente;
use Digitalhouse\Produto;
use Digitalhouse\Carrinho\CarrinhoItem;
use Digitalhouse\Carrinho\CarrinhoCompras;
use Digitalhouse\BancoDados\Pedido;

// recebendo dados de cliente e instanciando obj cliente
$nomeDoComprador = $_POST['nome_comprador'];
$emailComprador  = $_POST['email_comprador'];

$cliente = new Cliente($nomeDoComprador, $emailComprador);

// recebendo dados dos produtos
$nomeProduto1       = $_POST['nome_produto1'];
$valorProduto1      = $_POST['valor_produto1'];
$valorFreteProduto1 = $_POST['valor_frete_produto1'];
$quantidadeProduto1 = $_POST['quantidade_produto1'];

$nomeProduto2       = $_POST['nome_produto2'];
$valorProduto2      = $_POST['valor_produto2'];
$valorFreteProduto2 = $_POST['valor_frete_produto2'];
$quantidadeProduto2 = $_POST['quantidade_produto2'];

$nomeProduto3       = $_POST['nome_produto3'];
$valorProduto3      = $_POST['valor_produto3'];
$valorFreteProduto3 = $_POST['valor_frete_produto3'];
$quantidadeProduto3 = $_POST['quantidade_produto3'];

// instanciando produtos
$produto1 = new Produto($nomeProduto1, $valorProduto1, $valorFreteProduto1);
$produto2 = new Produto($nomeProduto2, $valorProduto2, $valorFreteProduto2);
$produto3 = new Produto($nomeProduto3, $valorProduto3, $valorFreteProduto3);

//instanciando itens de um carrinho
$item1 = new CarrinhoItem($produto1, $quantidadeProduto1);
$item2 = new CarrinhoItem($produto2, $quantidadeProduto2);
$item3 = new CarrinhoItem($produto3, $quantidadeProduto3);

//instanciando o carrinho de compras
$carrinhoCompras = new CarrinhoCompras(
    $cliente,
    [$item1, $item2, $item3]
);


try {
    $pdo = new PDO(
        'mysql:host=mysql;dbname=digitalhouse',
        'root',
        'root'
    );
    $pedidoDB = new Pedido($carrinhoCompras, $pdo);
    $pedidos = $pedidoDB->listarPedidosRealizados();

    $pedidos->getCliente()->getNome();
} catch (\Exception $exception) {
    echo $exception->getMessage();
}
