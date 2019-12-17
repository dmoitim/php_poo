<?php

require_once './aula_12b_Animal.php';

class Peixe extends Animal {

    private $corEscama;

    public function alimentar() {
        echo "<p>Comendo substâncias.</p>";
    }

    public function emitirSom() {
        echo "<p>Peixe não faz sons.</p>";
    }

    public function locomover() {
        echo "<p>Nadando.</p>";
    }

    public function soltarBolha() {
        echo "<p>Sotou uma bolha.</p>";
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
        return $this;
    }

}
