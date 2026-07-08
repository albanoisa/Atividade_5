<?php

function criptografarMensagem($mensagem, $chave) {
    $mensagemCriptografada = '';
    $tamanhoMensagem = strlen($mensagem);
    $tamanhoChave = strlen($chave);

    for ($i = 0; $i < $tamanhoMensagem; $i++) {
        $caractereMensagem = ord($mensagem[$i]);
        $caractereChave = ord($chave[$i % $tamanhoChave]);
        $caractereCriptografado = ($caractereMensagem + $caractereChave) % 256;
        $mensagemCriptografada .= chr($caractereCriptografado);
    }

    return base64_encode($mensagemCriptografada);
}

function descriptografarMensagem($mensagemCriptografada, $chave) {
    $mensagemCriptografada = base64_decode($mensagemCriptografada);
    $mensagemDescriptografada = '';
