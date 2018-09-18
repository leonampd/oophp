<?php

require 'Carro.php';
require 'Oficina.php';
require 'BMW.php';
require 'Mercedez.php';
require 'CarroTurbo.php';
require 'BMWTurbo.php';

$minhaBMW      = new BMW('preta', '2018', 'Serie M');
$minhaMercedez = new Mercedez('vermlho', '2019', 'AMG SL');

$minhaBMWTurbo = new BMWTurbo('azul', '2010', 'Serie M Turbo');

$oficina = new Oficina();
//
//$oficina->consertar($minhaMercedez);
//$oficina->consertar($minhaBMW);
$oficina->consertar($minhaBMWTurbo);

$oficina->aumentarPotencia($minhaBMW);
