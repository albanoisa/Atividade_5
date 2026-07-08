<?php

1- function calcularIMC($peso, $altura) {
    if ($altura <= 0) {
        return "Altura inválida. A altura deve ser maior que zero.";
    }
    $imc = $peso / ($altura * $altura);
    return round($imc, 2);
}

function classificarIMC($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 25) {
        return "Peso normal";
    } elseif ($imc >= 25 && $imc < 30) {
        return "Sobrepeso";
    } else {
        return "Obesidade";
    }
}

2- function validarEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
        return "O email é válido.";
    } else {
        return false;
        return "O email é inválido.";
    }
}


