<?php

function estatisticasNumericas($numeros) {
    $soma = array_sum($numeros);
    $quantidade = count($numeros);
    $media = $soma / $quantidade;
    $maiorValor = max($numeros);
    $menorValor = min($numeros);

    $numerosOrdenados = $numeros;
    sort($numerosOrdenados);

    $posicaoCentral = floor($quantidade / 2);

     if ($quantidade % 2 == 0){
        $mediana = ($numerosOrdenados[$posicaoCentral - 1] + $numerosOrdenados[$posicaoCentral]) / 2;
    } else {
        $mediana = $numerosOrdenados[$posicaoCentral];
    }


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