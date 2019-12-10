<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <pre>
            <?php
            require_once "aula_06b_Classe.php";
            echo "<h1>Testes</h1>";

            $c = new ControleRemoto();
            $c->ligar();
            $c->abrirMenu();
            $c->maisVolume();
            $c->abrirMenu();
            $c->desligar();
            $c->maisVolume();
            $c->ligar();
            $c->menosVolume();
            $c->menosVolume();
            $c->abrirMenu();
            ?>
        </pre>
    </body>
</html>