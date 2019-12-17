<?php

require_once './aula_12b_Animal.php';

class Reptil extends Animal {

    private $corEscama;

    public function alimentar() {
        echo "<p>Come vegetais.</p>";
    }

    public function emitirSom() {
        echo "<p>Som de réptil.</p>";
    }

    public function locomover() {
        echo "<p>Rastejando.</p>";
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
        return $this;
    }

}
