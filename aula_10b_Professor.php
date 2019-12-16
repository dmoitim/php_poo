<?php

require_once './aula_10b_Pessoa.php';

class Professor extends Pessoa {

    private $especialidade;
    private $salario;

    public function receberAumento($aumento) {
        $this->setSalario($this->getSalario() + $aumento);
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
        return $this;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
        return $this;
    }

}
