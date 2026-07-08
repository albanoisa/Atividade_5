<?php

function calcularMedia($numeros) {
    if (count($numeros) === 0) {
        return 0;
    }
    $soma = array_sum($numeros);
    return $soma / count($numeros);
}