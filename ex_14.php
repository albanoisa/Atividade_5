<?php

function estatisticasNumericas($numeros) {
    $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    $maior = max($numeros);
    $menor = min($numeros);

    return [
        'soma' => $soma,
        'media' => $media,
        'maior' => $maior,
        'menor' => $menor,
        'mediana' => calcularMediana($numeros),
        'quantidadepares' => contarPares($numeros),
        'quantidadedeimpares' => contarImpares($numeros)
    ];
}