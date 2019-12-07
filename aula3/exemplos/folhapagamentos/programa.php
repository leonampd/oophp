<?php

require("classes/CalculadoraSalario.php");
require("classes/CalculadoraSalarioPorHorasTrabalhadas.php");
require("classes/CalculadoraSalarioPorBonus.php");
require("classes/CalculadoraSalarioHorasExtras.php");

$calculadoraSalario = new CalculadoraSalario();
$calculadoraSalarioPorHorasTrabalhadas = new CalculadoraSalarioPorHorasTrabalhadas(30);
$calculadoraSalarioPorBonus = new CalculadoraSalarioPorBonus(true);
$calculadoraSalarioPorHorasExtras = new CalculadoraSalarioHorasExtras(false, 10);

echo $calculadoraSalarioPorHorasTrabalhadas->calcularSalario();