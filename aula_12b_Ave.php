<?php

require_once './aula_12b_Animal.php';

class Ave extends Animal {

    private $corPena;

    public function alimentar() {
        echo "<p>Comendo frutas.</p>";
    }

    public function emitirSom() {
        echo "<p>Som da ave.</p>";
    }

    public function locomover() {
        echo "<p>Voando.</p>";
    }

    public function fazerNinho() {
        echo "<p>Construiu um ninho.</p>";
    }

    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
        return $this;
    }

}
