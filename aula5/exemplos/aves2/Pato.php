<?php

class Pato extends AvesQueVoamClasse
{
    public function voar()
    {
        $padrao = parent::voar();

        echo $padrao . 'jeito pato de voar';
    }
}
