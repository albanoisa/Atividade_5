<?php

function analisarProdutos($produtos) {
    $total = 0;
    foreach ($produtos as $produto) {
        $total += $produto['preco'] * $produto['quantidade'];
    }
    return $total;
}