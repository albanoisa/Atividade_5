<?php

function analisarTexto($texto) {
    $palavras = str_word_count($texto, 1);
    $frequencia = array_count_values($palavras);
    $frequencia = array_count_values($caracteres);
    $frequencia = array_count_values($vogais);
    arsort($frequencia);
    return $frequencia;
}