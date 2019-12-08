<?php

class ContaBanco
{
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Método Construtor
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "Conta criada com sucesso.<br>";
    }

    // Métodos
    public function abrirConta($tipoConta)
    {
        if (!$this->getStatus()) {
            $this->setTipo($tipoConta);
            $this->setStatus(true);

            if ($tipoConta === "CC") {
                $this->setSaldo(50);
            } else {
                $this->setSaldo(150);
            }
            echo "$tipoConta aberta com sucesso, seu saldo atual é de {$this->getSaldo()}.<br>";
        } else {
            echo "A conta já está aberta.<br>";
        }
    }

    public function fecharConta()
    {
        if ($this->getStatus()) {
            if ($this->getSaldo() < 0) {
                echo "Você não pode fechar esta conta pois seu saldo está negativo em {$this->getSaldo()}.<br>";
            } elseif ($this->getSaldo() > 0) {
                echo "Você não pode fechar esta conta pois seu saldo está positivo em {$this->getSaldo()}.<br>";
            } else {
                $this->setStatus(false);
                echo "Conta encerrada.<br>";
            }
        } else {
            echo "A conta não está aberta! Depósito não realizado.<br>";
        }
    }

    public function depositar($valor)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "Depósito de $valor realizado com sucesso na conta de {$this->getDono()}.<br>";
        } else {
            echo "A conta não está aberta! Depósito não realizado.<br>";
        }
    }

    public function sacar($valor)
    {
        if ($this->getStatus()) {
            if ($valor > $this->getSaldo()) {
                echo "Você não possui saldo suficiente para realizar o saque.<br>";
            } else {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "Saque de $valor realizado com sucesso da conta de {$this->getDono()}.<br>";
            }
        } else {
            echo "A conta não está aberta! Saque não realizado.<br>";
        }
    }

    public function pagarMensal()
    {
        if ($this->getStatus()) {
            if ($this->getTipo() === "CC") {
                $taxa = 12;
            } else {
                $taxa = 20;
            }

            $this->setSaldo($this->getSaldo() - $taxa);
            echo "Taxa mensal de $taxa cobrada da conta de {$this->getDono()}.<br>";
        } else {
            echo "A conta não está aberta! Depósito não realizado.<br>";
        }
    }

    public function saldoAtual()
    {
        if ($this->getStatus()) {
            echo "O saldo atual do(a) {$this->getDono()} é de {$this->getSaldo()}.<br>";
        } else {
            echo "A conta não está aberta! Depósito não realizado.<br>";
        }
    }

    // Getters and Setters
    function getNumConta()
    {
        return $this->numConta;
    }

    function getTipo()
    {
        return $this->tipo;
    }

    function getDono()
    {
        return $this->dono;
    }

    function getSaldo()
    {
        return $this->saldo;
    }

    function getStatus()
    {
        return $this->status;
    }

    function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    function setDono($dono)
    {
        $this->dono = $dono;
    }

    function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    function setStatus($status)
    {
        $this->status = $status;
    }
}
