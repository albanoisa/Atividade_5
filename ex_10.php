<?php

function calcularMedia($numeros) {
    if (count($numeros) === 0) {
        return 0;
    }
    $soma = array_sum($numeros);
    return $soma / count($numeros);

    if ($media >= 7) {
        return "Aprovado";
    } elseif ($media >= 5) {
        return "Recuperação";
    } else {
        elseif ($media < 5) {
        return "Reprovado";
    }
}