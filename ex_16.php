<?php

function contarMaiusculas($senha)
{
    return preg_match_all('/[A-Z]/', $senha);
}