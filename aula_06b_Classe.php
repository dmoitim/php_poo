<?php

require_once 'aula_06b_Interface.php';

class ControleRemoto implements Controlador {

    private $volume;
    private $ligado;
    private $tocando;

    function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function abrirMenu() {
        echo "<br>===== MENU =====";
        echo "<br>Está ligado? " . ($this->getLigado() ? "Sim" : "Não");
        echo "<br>Está tocando? " . ($this->getTocando() ? "Sim" : "Não");
        echo "<br>Volume " . $this->getVolume();
        for ($i = 0; $i < $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo "<br><br>";
    }

    public function fecharMenu() {
        echo "Fechando menu.";
    }

    public function ligar() {
        echo "<br>Ligando a TV.";
        $this->setLigado(true);
    }

    public function desligar() {
        echo "<br>Desligando a TV.";
        $this->setLigado(false);
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 10);
        } else {
            echo "<br>Erro: impossível aumentar o volume, TV desligada.";
        }
    }

    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 10);
        } else {
            echo "<br>Erro: impossível diminuir o volume, TV desligada.";
        }
    }

    public function play() {
        if ($this->getLigado() && !$this->getTocando()) {
            $this->setTocando(true);
        } else {
            echo "<br>Erro: TV desligada ou não está tocando.";
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        } else {
            echo "<br>Erro: TV desligada ou já está tocando.";
        }
    }

}
