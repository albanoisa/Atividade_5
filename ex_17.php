<?php 

function contarCaracteres(string $texto) 
    { 
    return strlen($texto);
    }

    function separarPalavras(string $texto): array { 
        
    $texto = trim($texto); 
    $texto = preg_replace('/\s+/', ' ', $texto);
    return explode(' ', $texto); }

    function contarPalavras(string $texto)
    {
        $palavras = separarPalavras($texto);
        return count($palavras);
    }