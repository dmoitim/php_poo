<?php

require_once './aula_14b_Video.php';
require_once './aula_14b_Gafanhoto.php';

class Visualizacao {

    private $espectador;
    private $video;

    public function __construct($espectador, $video) {
        $this->espectador = $espectador;
        $this->video = $video;

        $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
        $this->video->setViews($this->video->getViews() + 1);
    }

    public function avaliar() {
        $this->video->setAvaliacao(5);
    }

    public function avaliarNota($nota) {
        $this->video->setAvaliacao($nota);
    }

    public function avaliarPorcentagem($percentual) {
        $nota = 0;

        if ($percentual <= 20) {
            $nota = 3;
        } else if ($percentual <= 50) {
            $nota = 5;
        } else if ($percentual <= 90) {
            $nota = 8;
        } else {
            $nota = 10;
        }

        $this->video->setAvaliacao($nota);
    }

    public function getEspectador() {
        return $this->espectador;
    }

    public function getVideo() {
        return $this->video;
    }

    public function setEspectador($espectador) {
        $this->espectador = $espectador;
        return $this;
    }

    public function setVideo($video) {
        $this->video = $video;
        return $this;
    }

}
