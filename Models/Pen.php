<?php

class Pen
{
    private $cor;
    private $tamanho;
    private $espessura;
    private $tipo;

    public function __construct($cor, $tamanho, $espessura, $tipo = null){
        $this->cor = $cor;
        $this->tamanho = $tamanho;
        $this->espessura = $espessura;
        $this->tipo = $tipo;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getTamanho()
    {
        return $this->tamanho;
    }

    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;
    }

    public function getEspessura()
    {
        return $this->espessura;
    }

    public function setEspessura($espessura)
    {
        $this->espessura = $espessura;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
}
