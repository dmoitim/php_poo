<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <p>Lutadores</p>
            <?php
            require_once './aula_07b_Lutador.php';
            require_once './aula_08b_Luta.php';

            $lutador = [];

            $lutador[0] = new Lutador(
                    "Pretty Boy",
                    "França",
                    31,
                    1.75,
                    68.9,
                    11,
                    2,
                    1
            );

            $lutador[1] = new Lutador(
                    "Putscript",
                    "Brasil",
                    29,
                    1.68,
                    57.8,
                    14,
                    2,
                    3
            );

            $lutador[2] = new Lutador(
                    "Snapshadow",
                    "EUA",
                    35,
                    1.65,
                    80.9,
                    12,
                    2,
                    1
            );

            $lutador[3] = new Lutador(
                    "Dead Code",
                    "Austrália",
                    28,
                    1.93,
                    81.6,
                    13,
                    0,
                    2
            );

            $lutador[4] = new Lutador(
                    "Ufocobol",
                    "Brasil",
                    37,
                    1.70,
                    119.3,
                    5,
                    4,
                    3
            );

            $lutador[5] = new Lutador(
                    "Nerdaard",
                    "EUA",
                    30,
                    1.81,
                    105.7,
                    12,
                    2,
                    4
            );

            $uec1 = new Luta();
            $uec1->marcarLuta($lutador[0], $lutador[1]);
            $uec1->lutar();
            $lutador[0]->status();
            $lutador[1]->status();

            $uec2 = new Luta();
            $uec2->marcarLuta($lutador[0], $lutador[0]);
            $uec2->lutar();

            $uec3 = new Luta();
            $uec3->marcarLuta($lutador[0], $lutador[4]);
            $uec3->lutar();
            ?>
        </pre>
    </body>
</html>
