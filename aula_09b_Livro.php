<?php

require_once './aula_09b_Pessoa.php';
require_once './aula_09b_Publicacao.php';

class Livro implements Publicacao {

    private $titulo;
    private $autor;
    private $totalPaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totalPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->paginaAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function abrir() {
        if (!$this->getAberto()) {
            $this->setAberto(true);
            echo "<p>Livro foi aberto.</p>";
        } else {
            echo "<p>Livro ja está aberto.</p>";
        }
    }

    public function fechar() {
        if ($this->getAberto()) {
            $this->setAberto(false);
            echo "<p>Livro foi fechado.</p>";
        } else {
            echo "<p>Livro ja está fechado.</p>";
        }
    }

    public function folhear($pagina) {
        if ($this->getTotalPaginas() >= $pagina) {
            $this->setPaginaAtual($pagina);
            echo "Folheado para a página $pagina.";
        } else {
            $this->setPaginaAtual(0);
            echo "A página $pagina não existe no livro {$this->getTitulo()}.";
        }
    }

    public function avancarPagina() {
        if ($this->getPaginaAtual() < $this->getTotalPaginas()) {
            $this->setPaginaAtual($this->getPaginaAtual() + 1);
            echo "Avançado para a página {$this->getPaginaAtual()}.";
        } else {
            echo "Você chegou ao fim do livro {$this->getTitulo()}, não é possível avançar.";
        }
    }

    public function voltarPagina() {
        if (($this->getPaginaAtual() + 1) > 0) {
            $this->setPaginaAtual($this->getPaginaAtual() - 1);
            echo "Voltou para a página {$this->getPaginaAtual()}.";
        } else {
            echo "Você chegou ao início do livro {$this->getTitulo()}, não é possível voltar.";
        }
    }

    public function detalhes() {
        echo "<p>Livro {$this->getTitulo()} escrito po {$this->getAutor()}.<br>Páginas: {$this->getTotalPaginas()}, atual {$this->getPaginaAtual()}<br>Sendo lido por: {$this->getLeitor()->getNome()}</p>";
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotalPaginas() {
        return $this->totalPaginas;
    }

    public function getPaginaAtual() {
        return $this->paginaAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
        return $this;
    }

    public function setTotalPaginas($totalPaginas) {
        $this->totalPaginas = $totalPaginas;
        return $this;
    }

    public function setPaginaAtual($paginaAtual) {
        $this->paginaAtual = $paginaAtual;
        return $this;
    }

    public function setAberto($aberto) {
        $this->aberto = $aberto;
        return $this;
    }

    public function setLeitor($leitor) {
        $this->leitor = $leitor;
        return $this;
    }

}
