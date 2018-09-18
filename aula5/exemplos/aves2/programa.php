<?php

require 'Ave.php';
require 'AvesQueVoamClasse.php';
require 'AvesQueNadam.php';
require 'AvesQueAndam.php';
require 'AvesQueVoam.php';
require 'Gaiola.php';
require 'Pinguim.php';
require 'Pato.php';
require 'Andorinha.php';

$pato = new Pato();

$pinguim = new Pinguim();
$pinguim->nadar();
$pinguim->andar();

echo '------------' . PHP_EOL;

$andorinha = new Andorinha();
echo $andorinha->voar();


echo '------------' . PHP_EOL;

$pato->voar();
