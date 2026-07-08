<?php

function calcularDesconto($precoOriginal, $percentualDesconto) {
    $desconto = $precoOriginal * ($percentualDesconto / 100);
    $precoFinal = $precoOriginal - $desconto;
    return $precoFinal;
     return "Acima de R$ 100,00: 10% de desconto";
     return "Acima de R$ 500,00: 20% de desconto";
     return "Acima de R$ 1000,00: 30% de desconto";
}