<?php

class Oficina
{
    private $carros;

    public function __construct(Carro $carro) //type hint
    {
        $this->carros[] = $carro;
    }

    public function addCarro($carro)
    {
        $this->carros[] = $carro;
    }

    public function conserto()
    {
        echo 'Marca: '. $this->carros[0]->getMarca() . PHP_EOL;
        echo 'Placa: ' . $this->carros[0]->getPlaca() . PHP_EOL;
        echo 'Nome do Dono: '.$this->carros[0]->getNomeDoProprietario() . PHP_EOL;
    }

    public function conserteTodos()
    {
        foreach ($this->carros as $carrinho) {
            echo 'Marca: '. $carrinho->getMarca() . PHP_EOL;
            echo 'Placa: ' . $carrinho->getPlaca() . PHP_EOL;
            echo 'Nome do Dono: '.$carrinho->getNomeDoProprietario() . PHP_EOL;
        }
    }
}
