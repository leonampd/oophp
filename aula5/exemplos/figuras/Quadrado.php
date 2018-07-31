<?php

class Quadrado implements FiguraGeometrica
{
    public function area(){
        return $this->lado * $this->lado;
    }

}