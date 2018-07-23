<?php

abstract class Carro
{
    private $placa;
    private $marca;
    private $nomeDoProprietario;

    public function __construct(
        $placa,
        $marca,
        $nomeDoDono
    ) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->nomeDoProprietario = $nomeDoDono;
    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function setPlaca($placa)
    {
        if (is_null($this->placa)) {
            $this->placa = $placa;
        }
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getNomeDoProprietario()
    {
        return $this->nomeDoProprietario;
    }

    public function setNomeDoProprietario($nome)
    {
        $this->nomeDoProprietario = $nome;
    }
}
