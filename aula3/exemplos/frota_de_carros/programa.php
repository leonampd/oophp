<?php

require 'Veiculo.php';
require 'Onibus.php';
require 'Bike.php';
require 'Oficina.php';

$meuVeiculo = new Veiculo('123345', 'preto', 'ETF-2355');

echo $meuVeiculo->getChassi();
echo $meuVeiculo->getPlaca();
echo $meuVeiculo->getCor();

$onibus = new Onibus('654321', 'branco', 'XYZ-4545', 'catraca eletronica');

echo PHP_EOL;

echo $onibus->getChassi();
echo $onibus->getPlaca();
echo $onibus->getCor();

echo PHP_EOL;

$onibus->andar();

echo PHP_EOL;

$minhabike = new Bike('1233567', 'vermelha', 'ETF-0998');

echo $minhabike->getPlaca();

echo PHP_EOL;

$oficina = new Oficina($minhabike);

$oficina->arrumar();
