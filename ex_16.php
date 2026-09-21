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