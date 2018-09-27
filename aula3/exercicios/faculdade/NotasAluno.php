<?php

class NotasAluno
{
    private $curso;
    private $materia;
    private $notas;

    public function __construct($curso, $materia, $notas)
    {
        $this->curso = $curso;
        $this->materia = $materia;
        $this->notas = $notas;
    }

    public function getNomeMateria()
    {
        return $this->materia->getNome();
    }

    public function getNotas()
    {
        return $this->notas;
    }

    public function calcularMediaAritmeticaSimples()
    {
        return array_sum($this->notas) / count($this->notas);
    }

    public function multiplicaPorPeso($nota, $peso)
    {
        return $nota * $peso;
    }

    public function calcularMediaAritmeticaPonderada()
    {
        $notasMultiplicadasPorPeso = [];
        for ($i = 0; $i < count($this->notas); $i++) {
            $notasMultiplicadasPorPeso[$i] = $this->notas[$i] * $this->curso->getPesosNotas()[$i];
        }

        $somaMultiplicacao = array_sum($notasMultiplicadasPorPeso);
        $somaDosPesos = array_sum($this->curso->getPesosNotas());

        return $somaMultiplicacao / $somaDosPesos;
    }

    public function calcularMedia()
    {
        if ($this->curso->isMediaAritmeticaSimples()) {
            return $this->calcularMediaAritmeticaSimples();
        }

        return $this->calcularMediaAritmeticaPonderada();
    }
}
