<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once './aula_12b_Ave.php';
            require_once './aula_12b_Mamifero.php';
            require_once './aula_12b_Peixe.php';
            require_once './aula_12b_Reptil.php';
            require_once './aula_12b_Canguru.php';
            require_once './aula_12b_Cachorro.php';
            require_once './aula_12b_Arara.php';
            require_once './aula_12b_Cobra.php';
            require_once './aula_12b_GoldFish.php';
            require_once './aula_12b_Tartaruga.php';

            echo "<p>Aula 12</p>";

            $a = new Ave();
            $m = new Mamifero();
            $p = new Peixe();
            $r = new Reptil();

            $m->setPeso(85.3);
            $m->setIdade(2);
            $m->setMembros(4);
            $m->setCorPelo("Marrom");
            print_r($m);
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();

            $p->setPeso(0.35);
            $p->setIdade(1);
            $p->setMembros(0);
            $p->setCorEscama("Prata");
            print_r($p);
            $p->locomover();
            $p->alimentar();
            $p->emitirSom();
            $p->soltarBolha();

            $r->setPeso(0.89);
            $r->setIdade(3);
            $r->setMembros(4);
            $r->setCorEscama("Verde");
            print_r($r);
            $r->locomover();
            $r->alimentar();
            $r->emitirSom();

            $a->setPeso(0.89);
            $a->setIdade(2);
            $a->setMembros(2);
            $a->setCorPena("Preta");
            print_r($a);
            $a->locomover();
            $a->alimentar();
            $a->emitirSom();
            $a->fazerNinho();

            echo "<hr>";

            $ma = new Mamifero();
            $c = new Canguru();
            $k = new Cachorro();

            $ma->setPeso(5.7);
            $ma->setIdade(8);
            $ma->setMembros(4);
            print_r($ma);
            $ma->locomover();
            $ma->alimentar();
            $ma->emitirSom();

            $c->setPeso(55.30);
            $c->setIdade(3);
            $c->setMembros(4);
            print_r($c);
            $c->locomover();
            $c->alimentar();
            $c->emitirSom();
            $c->usarBolsa();

            $k->setPeso(3.94);
            $k->setIdade(5);
            $k->setMembros(4);
            print_r($k);
            $k->locomover();
            $k->alimentar();
            $k->emitirSom();
            $k->enterrarOsso();
            $k->abanarRabo();

            $t = new Tartaruga();
            $t->locomover();
            ?>
        </pre>
    </body>
</html>
