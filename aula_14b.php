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

            echo "<p>Aula 14</p>";
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTMLL5");

            print_r($v);

            $v[0]->play();
            $v[1]->pause();
            $v[2]->like();

            print_r($v);

            $p[0] = new Gafanhoto("Devair", 35, "M", "dmoitim");
            $p[1] = new Gafanhoto("Creuza", 19, "F", "cre");
            print_r($p);
            ?>
        </pre>
    </body>
</html>
