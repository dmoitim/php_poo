<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once './aula_10b_Pessoa.php';
            require_once './aula_10b_Aluno.php';
            require_once './aula_10b_Professor.php';
            require_once './aula_10b_Funcionario.php';

            echo "<p>Aula 10</p>";

            $pessoa[0] = new Pessoa();
            $pessoa[1] = new Aluno();
            $pessoa[2] = new Professor();
            $pessoa[3] = new Funcionario();

            $pessoa[0]->setNome("Pedro");
            $pessoa[1]->setNome("Maria");
            $pessoa[2]->setNome("Cláudio");
            $pessoa[3]->setNome("Fabiana");

            $pessoa[1]->setCurso("Informática");
            $pessoa[2]->setSalario(2500.75);
            $pessoa[3]->setSetor("Estoque");

            print_r($pessoa);

            // $pessoa[1]->receberAumento(10);
            // $pessoa[2]->mudarTrabalho();
            // $pessoa[3]->cancelarMatricula();
            ?>
        </pre>
    </body>
</html>
