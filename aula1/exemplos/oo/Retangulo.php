<?php

class Retangulo
{
    public $baseDoRetangulo;
    public $alturaDoRetangulo;

    public function area()
    {
        $area = $this->baseDoRetangulo * $this->alturaDoRetangulo;

        return $area;
    }
}
