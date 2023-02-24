<?php
    $a = 'teste';
    $b = 12.8;
    
    if(is_float($a)){
        echo 'Variável 1 é float! <br>';
    }

    if(is_float($b)){
        echo 'Variável 2 é float! <br>';
    }

    if(is_float(6565.63)){
        echo 'Variável 3 é float! <br>';
    }

    if(is_float('teste')){
        echo 'Variável 2 é float! <br>';
    }