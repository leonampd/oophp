<?php
namespace Digitalhouse\BancoDados;

use Digitalhouse\Carrinho\CarrinhoCompras;
use \PDO;

class Pedido
{
    private $carrinho;
    private $pdo;

    public function __construct(CarrinhoCompras $carrinho, PDO $pdo)
    {
        $this->carrinho = $carrinho;
        $this->pdo = $pdo;
    }

    public function salvar()
    {
        $cliente = $this->carrinho->getCliente();
        $statement = $this->pdo->prepare(
            "INSERT INTO clientes (nome, email) VALUES (?, ?)"
        );

        $statement->bindParam(1, $cliente->getNome());
        $statement->bindParam(2, $cliente->getEmail());

        $statement->execute();

        $idCliente = $this->pdo->lastInsertId();

        $cliente->setId($idCliente);

        $pedidoStatement = $this->pdo->prepare(
            "INSERT INTO pedidos (id_cliente, valor_total_pedido) VALUES (?, ?)"
        );

        $pedidoStatement->bindParam(1, $cliente->getId());
        $pedidoStatement->bindParam(2, $this->carrinho->valorTotal());

        $pedidoStatement->execute();
    }

    public function listarPedidosRealizados()
    {
        $pedidos = $this->pdo->query('SELECT * FROM pedidos');
        var_dump($pedidos->fetchAll());
    }
}
