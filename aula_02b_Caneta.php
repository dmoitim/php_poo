<?php

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar()
    {
        if ($this->tampada) {
            echo "<p>Erro! Não posso rabiscar.</p>";
        } else {
            echo "<p>Estou rabiscando.</p>";
        }
    }

    public function tampar()
    {
        echo "<p>Caneta tampada.</p>";
        $this->tampada = true;
    }

    public function destampar()
    {
        echo "<p>Caneta destampada.</p>";
        $this->tampada = false;
    }
}
