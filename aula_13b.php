<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            echo "<p>Aula 13</p>";

            require_once './aula_13b_Cachorro.php';

            $m = new Mamifero();
            print_r($m);
            $m->emitirSom();

            $c = new Cachorro();
            print_r($c);
            $c->emitirSom();
            $c->reagirFrase("olá");
            $c->reagirFrase("Vai apanhar");
            $c->reagirHora(11, 45);
            $c->reagirHora(21, 00);
            $c->reagirDono(true);
            $c->reagirDono(false);
            $c->reagirIdadePeso(2, 12.5);
            $c->reagirIdadePeso(17, 4.5);

            $l = new Lobo();
            print_r($l);
            $l->emitirSom();
            ?>
        </pre>
    </body>
</html>
