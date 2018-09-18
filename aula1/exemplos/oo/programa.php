<?php
require 'Retangulo.php';

$x = $_POST['base'];
$y = $_POST['altura'];

$meuRetangulo = new Retangulo();
$outroRetangulo = new Retangulo();

$quadrado = new Quadrado();

$meuRetangulo->alturaDoRetangulo = $x;
$meuRetangulo->baseDoRetangulo = $y;

$outroRetangulo->altura = 100;
$outroRetangulo->baseDoRetangulo = 200;

echo $meuRetangulo->area() . '<br>';
echo $outroRetangulo->area();
