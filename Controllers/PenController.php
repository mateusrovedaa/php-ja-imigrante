<?php

class PenController
{
    private $arrayPens = [];

    public function save($pen)
    {
        $this->arrayPens[] = $pen;
    }

    public function list(){
        foreach ($this->arrayPens as $pen) {
            echo "Cor: " . $pen->getCor() . "\n";
            echo "Tamanho: " . $pen->getTamanho() . "\n";
            echo "Espessura: " . $pen->getEspessura() . "\n";
            echo "Tipo: " . $pen->getTipo() . "\n";
            echo "----\n";
        }
    }
}
