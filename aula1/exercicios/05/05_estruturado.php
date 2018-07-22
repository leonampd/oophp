<?php
// Definir o peso, o sexo e a altura de uma determinada pessoa. Exibir se
// esta pessoa esta ou não com seu peso ideal. Veja
// tabela da relacao peso/altura

/**
 *
 * PESO Masculino
 *
 * R < 20 ==> Abaixo do peso
 * 20 <= R >= 25 Peso Ideal
 * R >= 25 Acima do peso
 *
 * * PESO Masculino
 *
 * R < 19 ==> Abaixo do peso
 * 19 <= R >= 24 Peso Ideal
 * R >= 24 Acima do peso
 *
 */

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$genero = $_POST['genero'];

$resultado = $peso / pow(2, $altura);

if ($genero == 'm') {
    if ($resultado < 20) {
        echo 'Abaixo do peso' . '<br>';
    } elseif ($resultado >= 20 && $resultado < 25) {
        echo 'Peso ideal' . '<br>';
    } else {
        echo 'Acima do peso' . '<br>';
    }
} else {
    if ($resultado < 19) {
        echo 'Abaixo do peso' . '<br>';
    } elseif ($resultado >= 19 && $resultado < 24) {
        echo 'Peso ideal' . '<br>';
    } else {
        echo 'Acima do peso' . '<br>';
    }
}
