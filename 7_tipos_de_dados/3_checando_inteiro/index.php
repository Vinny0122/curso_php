<?php
    
    if(is_int(5)){ //true
        echo 'É um inteiro <br>';
    }

    if(is_int('Não é um inteiro')){ //true
        echo 'É um inteiro <br>';
    }

    $n = 10;

    if(is_int($n)){ //true
        echo 'É um inteiro <br>';
    }