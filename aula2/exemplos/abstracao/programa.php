<?php

// sem contexto, sem abstracao
$x = 10;
$y = 50;

$z = $x * $y;

echo $z;

// agora algo OO, com abstracao...
require "Retangulo.php";
$meuRetangulo = new Retangulo();

$meuRetangulo->base = 10;
$meuRetangulo->altura = 50;

echo $meuRetangulo->area() . PHP_EOL;

$outroRetangulo = new Retangulo();
$outroRetangulo->altura = 80;
$outroRetangulo->base = null;

echo $outroRetangulo->area() . PHP_EOL;
