<?php

class Caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar()
    {
        if ($this->tampada) {
            echo "<p>Erro! Não posso rabiscar.</p>";
        } else {
            echo "<p>Estou rabiscando.</p>";
        }
    }

    function tampar()
    {
        echo "<p>Caneta tampada.</p>";
        $this->tampada = true;
    }

    function destampar()
    {
        echo "<p>Caneta destampada.</p>";
        $this->tampada = false;
    }
}
