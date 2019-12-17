<?php

require_once './aula_14b_Pessoa.php';

class Gafanhoto extends Pessoa {

    private $login;
    private $totalAssistido;

    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totalAssistido = 0;
    }

    public function assistirMaisUm() {
        $this->totalAssistido++;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getTotalAssistido() {
        return $this->totalAssistido;
    }

    public function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    public function setTotalAssistido($totalAssistido) {
        $this->totalAssistido = $totalAssistido;
        return $this;
    }

}
