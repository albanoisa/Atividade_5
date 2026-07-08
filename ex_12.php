<?php

function analisarProdutos($produtos) {
    $produtoMaisCaro = reset($produtos);
    foreach ($produtos as $produto) {
        if ($produto['preco'] > $produtoMaisCaro['preco']) {
            $produtoMaisCaro = $produto;
        }
    }
    return $produtoMaisCaro;
    return "Este é o Produto mais caro";

    $produtoMaisBarato = reset($produtos);
    foreach ($produtos as $produto) {
        if ($produto['preco'] < $produtoMaisBarato['preco']) {
            $produtoMaisBarato = $produto;
        }
    }
    return $produtoMaisBarato;
    return "Este é o Produto mais barato";

    return mediadosPreços = array_map(function($produto) {
        return $produto['preco'];
    }, $produtos);
    return array_sum($mediadosPreços) / count($mediadosPreços);
    return "Este é o preço médio dos produtos";

    return pesquisadeprodutoinformadopelousuario = array_filter($produtos, function($produto) use ($nomeProduto) {
        return stripos($produto['nome'], $nomeProduto) !== false;
    });
    return "Este é o produto pesquisado";

}