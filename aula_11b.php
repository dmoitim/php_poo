<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once './aula_11b_Pessoa.php';
            require_once './aula_11b_Visitante.php';
            require_once './aula_11b_Aluno.php';
            require_once './aula_11b_Bolsista.php';
            require_once './aula_11b_Tecnico.php';
            require_once './aula_11b_Professor.php';

            echo "<p>Aula 11</p>";

            // Por ser abstrata, não é possível instancia-la
            // $p1 = new Pessoa();

            $v1 = new Visitante();
            $v1->setNome("Juvernal");
            $v1->setIdade(33);
            $v1->setSexo("M");
            print_r($v1);

            echo "<br>";

            $a1 = new Aluno();
            $a1->setNome("Bianca");
            $a1->setIdade(9);
            $a1->setSexo("F");
            $a1->setMatricula(1234);
            $a1->setCurso("Ensino fundamental I");
            $a1->pagarMensalidade();
            print_r($a1);

            echo "<br>";

            $b1 = new Bolsista();
            $b1->setNome("Ana");
            $b1->setIdade(14);
            $b1->setSexo("F");
            $b1->setMatricula(4321);
            $b1->setCurso("Ensino fundamental II");
            $b1->setBolsa(20);
            $b1->pagarMensalidade();
            print_r($b1);

            echo "<br>";

            $t1 = new Tecnico();
            $t1->setNome("Devair");
            $t1->setIdade(35);
            $t1->setSexo("M");
            $t1->setMatricula(1243);
            $t1->setCurso("Pós-graduação em Desenvolvimento de Sistemas");
            $t1->setRegistroProfissional(123);
            $t1->praticar();
            print_r($t1);

            echo "<br>";

            $p1 = new Professor();
            $p1->setNome("Guanabara");
            $p1->setIdade(30);
            $p1->setSexo("M");
            $p1->setEspecialidade("Desenvolvimento de Sistemas");
            $p1->setSalario(5000);
            $p1->receberAumento(1000);
            print_r($p1);
            ?>
        </pre>
    </body>
</html>
