<?php

class Pinguim implements AvesQueNadam, AvesQueAndam
{
    public function nadar()
    {
        echo 'eu sou um pinguim que nada';
    }

    public function andar()
    {
        echo 'eu sou um pinguim dançarino';
    }
}