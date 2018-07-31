<?php

class Andorinha implements AvesQueVoam, AvesQueAndam
{
    public function andar()
    {
        echo 'eu ando pouco';
    }

    public function voar()
    {
        echo 'eu voo pra krl';
    }
}