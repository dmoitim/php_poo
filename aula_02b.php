<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "aula_02b_Caneta.php";

    $c1 = new Caneta();
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->tampada = false;

    print_r($c1);
    $c1->rabiscar();

    $c1->tampar();
    $c1->rabiscar();
    print_r($c1);

    $c1->destampar();
    $c1->rabiscar();
    print_r($c1);

    echo "<br><br><br>";

    $c2 = new Caneta();
    $c2->cor = "Verde";
    $c2->carga = 50;
    $c2->tampar();
    print_r($c2);
    ?>
</body>

</html>