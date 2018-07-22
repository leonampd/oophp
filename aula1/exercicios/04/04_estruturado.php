<?php
// Definir duas variaveis com o peso e a altura de uma determinada pessoa.
// exibir se esta pessoa esta ou nao com seu peso ideal. Veja tabela da
// relação peso/altura

/**
 *
 * PESO
 *
 * R < 20 ==> Abaixo do peso
 * 20 <= R >= 25 Peso Ideal
 * R >= 25 Acima do peso
 */

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$resultado = $peso / pow(2, $altura);

if ($resultado < 20) {
    echo 'Abaixo do peso' . '<br>';
} elseif ($resultado >= 20 && $resultado < 25) {
    echo 'Peso ideal' . '<br>';
} else {
    echo 'Acima do peso' . '<br>';
}
