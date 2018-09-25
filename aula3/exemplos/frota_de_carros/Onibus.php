<?php

class Onibus extends Veiculo
{
    private $catraca;

    public function __construct($chassiX, $corX, $placaX, $catracaX)
    {
        $this->catraca = $catracaX;
        parent::__construct($chassiX, $corX, $placaX);
    }
}
