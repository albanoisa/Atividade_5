<?php

function formatarTexto($texto) {
    $textoFormatado = ucwords(strtolower($texto));
    return $textoFormatado;
}