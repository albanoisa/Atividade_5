<?php

function converterTemperatura($temperatura, $unidadeOrigem, $unidadeDestino) {
    if ($unidadeOrigem === 'C' && $unidadeDestino === 'F') {
        return ($temperatura * 9/5) + 32;
    } elseif ($unidadeOrigem === 'F' && $unidadeDestino === 'C') {
        return ($temperatura - 32) * 5/9;
    } else {
        return "Unidades inválidas. Use 'C' para Celsius e 'F' para Fahrenheit.";
    }
}