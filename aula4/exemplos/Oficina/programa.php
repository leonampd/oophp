<?php
require "Carro.php";
require "Oficina.php";
require "BMW.php";
require "Mercedez.php";

$minhaBMW = new BMW('ABC-1234', 'BWM', 'Leonam');
$minhaMercedez = new Mercedez('MER-1234', 'Mercedez', 'Leonam Dias');

$oficina = new Oficina($minhaBMW);
$oficina->addCarro($minhaMercedez);

$oficina->conserto();

echo PHP_EOL;

$oficina->conserteTodos();
