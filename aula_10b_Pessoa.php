<?php

class Pessoa {

    private $nome;
    private $idade;
    private $sexo;

    public function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
        return $this;
    }

}
