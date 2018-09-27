<?php

require 'Boletim.php';
require 'Aluno.php';
require 'Materia.php';
require 'Curso.php';
require 'NotasAluno.php';
require 'CienciasComputacao.php';
require 'EngenhariaComputacao.php';

$aluno = new Aluno('Leonam');
$curso = new EngenhariaComputacao();
// $curso = new CienciasComputacao();

$logica       = new Materia('Logica');
$calculo1     = new Materia('Cálculo 1');
$programacao  = new Materia('Linguagem de programação');
$bancoDeDados = new Materia('Banco de dados');
$eletronica   = new Materia('Eletrônica');
$geometria    = new Materia('Geometria Analítica');

$notasLogica      = new NotasAluno($curso, $logica, [10, 5, 5, 5]);
$notasCalculo     = new NotasAluno($curso, $calculo1, [10, 10, 10, 5]);
$notasProgramacao = new NotasAluno($curso, $programacao, [10, 10, 5, 5]);
$notasBD          = new NotasAluno($curso, $bancoDeDados, [10, 10, 5, 5]);
$notasEletronica  = new NotasAluno($curso, $eletronica, [10, 10, 5, 5]);
$notasGeometria   = new NotasAluno($curso, $geometria, [10, 10, 5, 5]);

$boletim = new Boletim($aluno, $curso, $notasLogica);

$boletim->adicionarNotas($notasProgramacao);
$boletim->adicionarNotas($notasBD);
$boletim->adicionarNotas($notasEletronica);
$boletim->adicionarNotas($notasCalculo);
$boletim->adicionarNotas($notasGeometria);

echo PHP_EOL;
echo 'Nome do aluno: ' . $boletim->getNomeAluno() . PHP_EOL;
echo 'Nome do curso: ' . $boletim->getNomeCurso() . PHP_EOL . PHP_EOL;

foreach ($boletim->getNotas() as $notaAluno) {
    echo $notaAluno->getNomeMateria() . ': ';
    echo implode(', ', $notaAluno->getNotas());
    echo ' => ' . $notaAluno->calcularMedia() . PHP_EOL . PHP_EOL;
}

$mensagemAprovacaoSemestre = 'Reprovado';

if ($boletim->isAlunoAprovadoNoSemestre()) {
    $mensagemAprovacaoSemestre = 'Aprovado';
}

echo 'Situação do semestre: ' . $mensagemAprovacaoSemestre . PHP_EOL;
