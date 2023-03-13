<?php
    class Pessoa {
        function falar(){
            echo "Olá pessoal!";
        }
    }

    $vinicius = new Pessoa();
    $vinicius->nome = 'Vinícius';
    echo $vinicius->nome;
    echo "<br>";
    $vinicius->falar();
?>