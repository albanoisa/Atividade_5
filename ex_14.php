<?php

function estatisticasNumericas($numeros) {
    $soma = array_sum($numeros);
    $quantidade = count($numeros);
    $media = $soma / $quantidade;
    $maiorValor = max($numeros);
    $menorValor = min($numeros);


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