<?php
// Defina o valor da cotação do dolar e uma certa quantidade
// de dolares. Calcular e exibir o valor correspondente em Reais (R$)

$cotacao = $_POST['cotacao'];
$valorDolar = $_POST['quantia_dolar'];

echo 'Resultado: ' . $cotacao * $valorDolar . '<br>';
