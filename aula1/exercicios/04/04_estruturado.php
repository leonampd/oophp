<?php
// Entrar com o peso e a altura de uma determinada pessoa. Apos a digitação,
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

echo 'Digite o peso: ';
$peso = fgets(STDIN);

echo 'Digite a altura:';
$altura = fgets(STDIN);

$resultado = $peso / pow(2, $altura);

if ($resultado < 20) {
    echo 'Abaixo do peso' . PHP_EOL;
} elseif ($resultado >= 20 && $resultado < 25) {
    echo 'Peso ideal' . PHP_EOL;
} else {
    echo 'Acima do peso' . PHP_EOL;
}
