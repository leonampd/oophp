<?php
// Calcular e exibir a area de um quadrado, a partir do valor de sua aresta
// que sera digitado

echo 'Digite o valor da aresta: ';
$aresta = fgets(STDIN);

echo 'O valor da área é: ' . $aresta * $aresta . PHP_EOL;
