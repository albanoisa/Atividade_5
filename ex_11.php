<?php

function formatarTexto($texto) {
    $textoFormatado = ucwords(strtolower($texto));
    return $textoFormatado;
    else {
        return " O texto está totalmente em letras maiúsculas.";
        return " O texto está totalmente em letras minúsculas.";
        return " A primeira letra de cada palavra em maiúscula.";
        return " A quantidade total de caracteres.";
    }
}