<?php

require "Veiculo.php";
require "BMW.php";
require "Mercedez.php";
require "Oficina.php";

$bmw = new BMW('BMW', '4.0');

$mercedez = new Mercedez();

$oficina = new Oficina($bmw);

$outraOficina = new Oficina($mercedez);

echo $oficina->conserte() . PHP_EOL;
echo $outraOficina->conserte() . PHP_EOL;
