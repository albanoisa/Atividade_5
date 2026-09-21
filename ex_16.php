<?php

function contarMaiusculas($senha)
{
    return preg_match_all('/[A-Z]/', $senha);
}

function contarMinusculas($senha)
{
    return preg_match_all('/[a-z]/', $senha);
}

function contarNumeros($senha)
{
    return preg_match_all('/[0-9]/', $senha);
}

function contarCaracteresEspeciais($senha)
{
    return preg_match_all('/[^a-zA-Z0-9]/', $senha);

}

function classificarSeguranca($tamanho, $qtdMaiusculas, $qtdMinusculas, $qtdNumeros, $qtdEspeciais)
{
    if ($tamanho < 8) {
        return "Fraca";
    }

      $criterios = [$qtdMaiusculas, $qtdMinusculas, $qtdNumeros, $qtdEspeciais];
    $criteriosAtendidos = count(array_filter($criterios, fn($qtd) => $qtd > 0));

    $niveis = [4 => "Muito Forte", 3 => "Forte", 2 => "Média"];

    return $niveis[$criteriosAtendidos] ?? "Fraca";
}