<?php

function calcularMedia($numeros) {
    if (count($numeros) === 0) {
        return 0;
    }
    $soma = array_sum($numeros);
    return $soma / count($numeros);
}

function verificarSituacao($media) {
    if ($media >= 7) {
        return "Aprovado";
    } elseif ($media >= 5) {
        return "Recuperação";
    } else {
        return "Reprovado";
    }
}