<?php

function analisarNumero($numero) {
    if ($numero % 2 === 0) {
        return "O número é par.";
    } else {
        return "O número é ímpar.";
    }

    if ($numero > 0) {
        return "O número é primo.";
    } else {
        return "O número não é primo.";
    }

    if ($numero > 0 && $numero % 2 === 0) {
        return "O número é perfeito.";
    } elseif ($numero < 0) {
        return "O número não é perfeito.";
    } else {
        return "O número é zero.";
    }
}

