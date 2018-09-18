<?php
require 'Veiculo.php';
require 'CarroDePasseio.php';
require 'CarroDePasseioSedan.php';

$carro = new CarroDePasseio();
echo $carro->acelerar() . PHP_EOL;
echo $carro->frear() . PHP_EOL;

$sedan = new CarroDePasseioSedan();
echo $sedan->acelerar() . PHP_EOL;
echo $sedan->frear() . PHP_EOL;
