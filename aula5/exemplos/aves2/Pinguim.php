<?php

class Pinguim extends Ave implements AvesQueAndam, AvesQueNadam
{
    public function andar()
    {
        echo 'eu sou um pinguim que anda devagar' . PHP_EOL;
    }

    public function nadar()
    {
        echo 'Eu sou um pinguim que nada' . PHP_EOL;
    }
}
