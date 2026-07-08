<?php

function calcularDesconto($precoOriginal, $percentualDesconto) {
    $desconto = $precoOriginal * ($percentualDesconto / 100);
    $precoFinal = $precoOriginal - $desconto;
    return $precoFinal;
}