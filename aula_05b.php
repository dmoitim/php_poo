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
    require_once "aula_05b_Classe.php";
    echo "<h1>Testes</h1>";

    echo "<p><strong>Jubileu</strong></p>";
    $jubileu = new ContaBanco();
    $jubileu->abrirConta("CC");
    $jubileu->setDono("Jubileu");
    $jubileu->setNumConta(11111);
    $jubileu->depositar(300);
    $jubileu->pagarMensal();
    $jubileu->fecharConta();
    $jubileu->sacar(338);
    $jubileu->fecharConta();
    print_r($jubileu);

    echo "<br><br>";

    echo "<p><strong>Creuza</strong></p>";
    $creuza = new ContaBanco();
    $creuza->abrirConta("CP");
    $creuza->setDono("Creuza");
    $creuza->setNumConta(22222);
    $creuza->depositar(500);
    $creuza->sacar(100);
    $creuza->pagarMensal();
    $creuza->sacar(1000);
    $creuza->fecharConta();
    $creuza->sacar(530);
    $creuza->fecharConta();
    print_r($creuza);
    ?>
</pre>
</body>

</html>