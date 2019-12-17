<?php

require_once './aula_12b_Mamifero.php';

class Canguru extends Mamifero {

    public function usarBolsa() {
        echo "<p>Usando a bolsa.</p>";
    }

    public function locomover() {
        echo "<p>Saltando.</p>";
    }

}
