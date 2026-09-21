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
