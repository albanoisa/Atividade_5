<?php

function analisarNumero($numero) {
    if ($numero > 0) {
        return "O número é positivo.";
    } elseif ($numero < 0) {
        return "O número é negativo.";
    } else {
        return "O número é zero.";
    }
}