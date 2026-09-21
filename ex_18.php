<?php

function removerEspacosDuplicados(string $texto): string {
    return trim(preg_replace('/\s+/', ' ', $texto));
}

function contarFrases(string $texto): int {
    $frases = preg_split('/[.!?]+/', $texto, -1, PREG_SPLIT_NO_EMPTY);
    return count($frases);
}

function extrairPalavras(string $texto): array {
    $textoLimpo = mb_strtolower($texto, 'UTF-8');
    $textoLimpo = preg_replace('/[^\p{L}\p{N}\s]/u', '', $textoLimpo);
    $palavras = explode(' ', removerEspacosDuplicados($textoLimpo));

    return array_values(array_filter($palavras, function ($palavra) {
        return $palavra !== '';
    }));
}

function encontrarExtremosPalavras(array $palavras): array {
    if (empty($palavras)) {
        return ['mais_longa' => '', 'mais_curta' => ''];
    }

     $maisLonga = $palavras[0];
    $maisCurta = $palavras[0];

    foreach ($palavras as $palavra) {
        if (mb_strlen($palavra, 'UTF-8') > mb_strlen($maisLonga, 'UTF-8')) {
            $maisLonga = $palavra;
        }
        if (mb_strlen($palavra, 'UTF-8') < mb_strlen($maisCurta, 'UTF-8')) {
            $maisCurta = $palavra;
        }
    }

    return [
        'mais_longa' => $maisLonga,
        'mais_curta' => $maisCurta
    ];
}


function contarPalavrasRepetidas(array $palavras): int {
    $frequencias = array_count_values($palavras);
    $repetidas = array_filter($frequencias, function ($quantidade) {
        return $quantidade > 1;
    });

  return count($repetidas);
}


function obterCincoMaisFrequentes(array $palavras): array {
    $frequencias = array_count_values($palavras);
    arsort($frequencias);
    return array_slice($frequencias, 0, 5, true);
}


function formatarPrimeiraLetraMaiuscula(string $texto): string {
    $textoLimpo = removerEspacosDuplicados($texto);
    return mb_convert_case($textoLimpo, MB_CASE_TITLE, 'UTF-8');
}

function processarTexto(string $texto): array {
    $textoSemEspacos = removerEspacosDuplicados($texto);
    $palavras = extrairPalavras($texto);
    $extremos = encontrarExtremosPalavras($palavras);