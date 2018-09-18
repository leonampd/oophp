<?php

$numero = $_POST['numero_cartao'];
$cvv = $_POST['cvv_cartao'];
$portador = $_POST['portador_cartao'];
$vencimento = $_POST['vencimento_cartao'];

$cartao = new CartaoCredito();
$cartao->nomePortador = $portador;
$cartao->numero = $numero;
$cartao->dataVencimento = $vencimento;
$cartao->cvv = $cvv;

$caixa = new CaixaEletronico($cartao);

$caixa->saque();
