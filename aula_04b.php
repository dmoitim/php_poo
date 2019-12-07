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
    require_once "aula_04b_Caneta.php";

    $c1 = new Caneta("Bic", "Azul", 0.5);
    print_r("Eu tenho uma caneta {$c1->getModelo()} {$c1->getCor()} de ponta {$c1->getPonta()}.");
    echo "<br><br>";
    print_r($c1);
    ?>
    </pre>
</body>

</html>