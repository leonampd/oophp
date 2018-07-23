<?php
require "CaixaEletronico.php";
require "CartaoCredito.php";
require "CaixaEletronicoEspecial.php";

$cartao = new CartaoCredito();

$cartao->cvv = 123;
$cartao->bandeira = 'Master';
$cartao->dataValidade = '0225';

var_dump($cartao->cvv);

$caixaEletronico = new CaixaEletronicoEspecial($cartao);
$caixaEletronico->transferir();
