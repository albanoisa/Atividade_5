<?php

function analisarTexto($texto) {
    $palavras = str_word_count($texto, 1);
    $frequencia = array_count_values($palavras);
    arsort($frequencia);
    return $frequencia;
}