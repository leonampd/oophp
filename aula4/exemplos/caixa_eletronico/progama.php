<?php

require 'CartaoCredito.php';
require 'CaixaEletronico.php';
require 'CaixaEletronico24horas.php';

$meuCartao  = new CartaoCredito(4242424242424242, 'Leonam', '0226', 123);

$caixaEletronico4 = new CaixaEletronico24horas($meuCartao);
echo 'cartao 4: ' .$caixaEletronico4->saque() . PHP_EOL;
