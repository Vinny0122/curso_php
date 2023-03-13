<?php
    $pessoa = ['nome'=>'Vinícius','idade'=>15];
    $nome = $pessoa['nome'];
    $idade = $pessoa['idade'];
    if ($idade > 18) {
        echo "$nome tem $idade anos.";
    }
?>