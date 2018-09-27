<?php

class Boletim
{
    private $aluno;
    private $curso;
    private $notasAluno;

    public function __construct($aluno, $curso, $notasAluno)
    {
        $this->aluno = $aluno;
        $this->curso = $curso;
        $this->notasAluno[] = $notasAluno;
    }

    public function adicionarNotas($notasAluno)
    {
        $this->notasAluno[] = $notasAluno;
    }

    public function getNomeAluno()
    {
        return $this->aluno->getNome();
    }

    public function getNomeCurso()
    {
        return $this->curso->getNome();
    }

    public function getNotas()
    {
        return $this->notasAluno;
    }

    public function isAlunoAprovadoNoSemestre()
    {
        $notasAbaixoDaMedia = 0;

        foreach ($this->notasAluno as $nota) {
            if ($nota->calcularMedia() < $this->curso->getMedia()) {
                $notasAbaixoDaMedia++;
            }
        }

        if ($notasAbaixoDaMedia >= $this->curso->getMinimoAprovacaoSemestre()) {
            return false;
        }

        return true;
    }
}
