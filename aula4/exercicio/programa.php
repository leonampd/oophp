<?php
require "Cliente.php";
require "Veiculo.php";
require "Locacao.php";
require "VeiculoLuxo.php";
require "VeiculoFamilia.php";
require "VeiculoEconomico.php";

$cliente = new Cliente('Leonam', 'Dias');

$locacao = new Locacao($cliente);

echo $locacao->calcularValorTotal(new VeiculoLuxo(), 10) . PHP_EOL;
echo $locacao->calcularValorTotal(new VeiculoFamilia(), 10) . PHP_EOL;
echo $locacao->calcularValorTotal(new VeiculoEconomico(), 10) . PHP_EOL;
