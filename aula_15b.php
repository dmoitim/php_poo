<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once './aula_14b_Video.php';
            require_once './aula_14b_Gafanhoto.php';
            require_once './aula_15b_Visualizacao.php';

            echo "<p>Aula 15</p>";
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTMLL5");
            print_r($v);

            $p[0] = new Gafanhoto("Devair", 35, "M", "dmoitim");
            $p[1] = new Gafanhoto("Creuza", 19, "F", "cre");
            print_r($p);

            echo "<hr>";

            $vi[0] = new Visualizacao($p[0], $v[2]);
            $vi[1] = new Visualizacao($p[0], $v[1]);
            print_r($vi);
            $vi[0]->avaliar();
            $vi[1]->avaliarPorcentagem(85);
            print_r($vi);
            ?>
        </pre>
    </body>
</html>
