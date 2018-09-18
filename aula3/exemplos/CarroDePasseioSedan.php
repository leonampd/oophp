<?php

class CarroDePasseioSedan extends CarroDePasseio
{
    public function acelerar()
    {
        echo 'Eu sou um sedan e ' . parent::acelerar();
    }

    public function frear()
    {
        echo parent::frear() . ' e cantando pneu';
    }
}
