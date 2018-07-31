<?php

class Retangulo implements FiguraGeometrica
{
    public function area()
    {
        return $this->base * $this->altura;
    }
}
