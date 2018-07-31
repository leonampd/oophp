<?php

class FolhaPagamento
{
    private $funcionario;

    public function __construct(Colaborador $colaborador)
    {
        $this->funcionario = $colaborador;
    }

    public function gerarFolha(){
        var_dump($this->funcionario->salario() + $this->aplicarBonus());
    }

    private function aplicarBonus(){
        return 1500;
    }
}