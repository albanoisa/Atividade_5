<?php

function converterTemperatura($temperatura, $unidadeOrigem, $unidadeDestino) {
    if ($unidadeOrigem === 'C' && $unidadeDestino === 'F') {
        return ($temperatura * 9/5) + 32;
    } elseif ($unidadeOrigem === 'F' && $unidadeDestino === 'C') {
        return ($temperatura - 32) * 5/9;
    } elseif ($unidadeOrigem === 'C' && $unidadeDestino === 'K') {
        return $temperatura + 273.15;
    } elseif ($unidadeOrigem === 'K' && $unidadeDestino === 'C') {
        return $temperatura - 273.15;
    } else {
        return "Unidades inválidas. Use 'C' para Celsius,'F' para Fahrenheit e 'K' para Kelvin.";
    }
}