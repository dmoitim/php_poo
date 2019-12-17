<?php

require_once './aula_12b_Mamifero.php';

class Cachorro extends Mamifero {

    public function enterrarOsso() {
        echo "<p>Enterrando o osso.</p>";
    }

    public function abanarRabo() {
        echo "<p>Abanando o rabo.</p>";
    }

    public function emitirSom() {
        echo "<p>Latindo.</p>";
    }

}
