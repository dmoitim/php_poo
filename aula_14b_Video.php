<?php

require_once './aula_14b_AcoesVideo.php';

class Video implements AcoesVideo {

    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    public function like() {
        $this->curtidas++;
        echo "<p>Curtindo o vídeo $this->titulo.</p>";
    }

    public function pause() {
        $this->reproduzindo = false;
        echo "<p>Pausando o vídeo $this->titulo.</p>";
    }

    public function play() {
        $this->reproduzindo = true;
        echo "<p>Reproduzindo o vídeo $this->titulo.</p>";
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function getViews() {
        return $this->views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    public function setAvaliacao($avaliacao) {
        $media = ($this->avaliacao + $avaliacao) / $this->views;
        $this->avaliacao = $media;
        return $this;
    }

    public function setViews($views) {
        $this->views = $views;
        return $this;
    }

    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
        return $this;
    }

    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
        return $this;
    }

}
