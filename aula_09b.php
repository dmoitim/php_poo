<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once './aula_09b_Pessoa.php';
            require_once './aula_09b_Livro.php';

            echo "<p>Aula 09</p>";

            $pessoa[0] = new Pessoa("Bianca", 9, "F");
            $pessoa[1] = new Pessoa("Ana", 14, "F");
            $pessoa[2] = new Pessoa("Devair", 35, "M");

            $livro[0] = new Livro("Chapéuzinho vermelho", "Nome do autor do Livro 1", 54, $pessoa[0]);
            $livro[1] = new Livro("Furia de titãs", "Nome do autor do Livro 2", 200, $pessoa[1]);
            $livro[2] = new Livro("Programação Orientada a Objetos", "Nome do autor do Livro 3", 350, $pessoa[2]);

            print_r($pessoa);
            echo "<br>";
            print_r($livro);
            echo "<br>";

            $livro[2]->abrir();
            $livro[2]->folhear(349);
            print_r($livro[2]->detalhes());
            $livro[2]->avancarPagina();
            print_r($livro[2]->detalhes());
            $livro[2]->avancarPagina();
            ?>
        </pre>
    </body>
</html>
