<?php
// carro e seus componentes...
require "Cambio.php";
require "Carro.php";

$marchas = 5;
$cambioDaMinhaBMW = new CambioManual($marchas);

$bmw = new Carro('1237758', $cambioDaMinhaBMW);

var_dump($bmw);

$marchas = 4;
$cambioAutomatico = new CambioAutomatico($marchas);

$mercedes = new Carro('123456', $cambioAutomatico);
