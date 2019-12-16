<?php

require_once './aula_10b_Pessoa.php';

class Aluno extends Pessoa {

    private $matricula;
    private $curso;

    public function cancelarMatricula() {
        echo "<p>A matrícula será cancelada.</p>";
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
        return $this;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
        return $this;
    }

}
