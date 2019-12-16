<?php

require_once './aula_11b_Aluno.php';

class Tecnico extends Aluno {

    private $registroProfissional;

    public function praticar() {
        echo "<p>Prática do aluno (técnico) {$this->getNome()}.</p>";
    }

    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
        return $this;
    }

}
