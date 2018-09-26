<?php

require 'Veiculo.php';
require 'Onibus.php';
require 'Bike.php';
require 'Oficina.php';

$onibus = new Onibus('654321', 'branco', 'XYZ-4545', 'catraca eletronica');

echo PHP_EOL;

echo 'Chassi: ' . $onibus->getChassi() . PHP_EOL;
echo 'Placa: ' . $onibus->getPlaca() . PHP_EOL;
echo 'Cor: ' . $onibus->getCor() . PHP_EOL;

$onibus->andar();

echo PHP_EOL . '-------------------------------------' . PHP_EOL;

$minhabike = new Bike('1233567', 'vermelha', 'ETF-0998');
echo $minhabike->getPlaca();

echo PHP_EOL . '-------------------------------------' . PHP_EOL;

$oficina = new Oficina($minhabike);
$oficina->arrumar();
