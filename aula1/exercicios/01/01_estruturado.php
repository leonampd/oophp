<?php
// Entrar via teclado com a base e a altura de um retangulo, calcular e exibir
// sua area.

echo 'Digite o valor da base: ';
$base   = fgets(STDIN);

echo 'Digite o valor da altura: ';
$altura = fgets(STDIN);

echo 'O valor da áre é: '. $base * $altura . PHP_EOL;
