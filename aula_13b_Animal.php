<?php

abstract class Animal {

    protected $idade;
    protected $membros;
    protected $peso;

    public abstract function emitirSom();

    public function getIdade() {
        return $this->idade;
    }

    public function getMembros() {
        return $this->membros;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }

    public function setMembros($membros) {
        $this->membros = $membros;
        return $this;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        return $this;
    }

}
