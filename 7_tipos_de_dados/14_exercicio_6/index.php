<?php

    $carro = [
        'marca'=>'Chevrolet',
        'modelo'=>'Onix',
        'ano'=>2013
    ];

    print_r($carro);
    echo "<br>";
    echo $carro['marca'];
    echo "<br>";
    echo $carro['modelo'];
    echo "<br>";
    echo "<br>";

    $marca = $carro['marca'];
    $modelo = $carro['modelo'];

    echo "O $modelo pertence a marca $marca.";