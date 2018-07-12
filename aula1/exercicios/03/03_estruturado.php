<?php
// Entrar via teclado com o valor da cotação do dolar e uma certa quantidade
// de dolares. Calcular e exibir o valor correspondente em Reais (R$)

echo 'Digite o valor da cotacao: ';
$cotacao = fgets(STDIN);

echo 'Digite o valor em dólar: ';
$valorDolar = fgets(STDIN);

echo 'Resultado: ' . $cotacao * $valorDolar . PHP_EOL;
