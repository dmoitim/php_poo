<?php

require_once './aula_11b_Aluno.php';

class Bolsista extends Aluno {

    private $bolsa;

    public function renovarBolsa() {
        echo "<p>Bolsa renovada pelo aluno {$this->getNome()}.</p>";
    }

    public function pagarMensalidade() {
        echo "<p>Mensalidade paga pelo aluno (bolsista) {$this->getNome()}.</p>";
    }

    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
        return $this;
    }

}
