<?php
// Entrar com o peso, o sexo e a altura de uma determinada pessoa. Apos a
// digitacao, exibir se esta pessoa esta ou não com seu peso ideal. Veja
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

echo 'Digite o peso: ';
$peso = fgets(STDIN);

echo 'Digite a altura:';
$altura = fgets(STDIN);

echo 'Digite o gênero:';
$genero = fgets(STDIN);

$resultado = $peso / pow(2, $altura);

if ($genero == 'm') {
    if ($resultado < 20) {
        echo 'Abaixo do peso' . PHP_EOL;
    } elseif ($resultado >= 20 && $resultado < 25) {
        echo 'Peso ideal' . PHP_EOL;
    } else {
        echo 'Acima do peso' . PHP_EOL;
    }
} else {
    if ($resultado < 19) {
        echo 'Abaixo do peso' . PHP_EOL;
    } elseif ($resultado >= 19 && $resultado < 24) {
        echo 'Peso ideal' . PHP_EOL;
    } else {
        echo 'Acima do peso' . PHP_EOL;
    }
}
