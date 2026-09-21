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

     function contarFrases(string $texto)
    {
        $frases = preg_split('/[.!?]+/', trim($texto));
        $frases = array_filter($frases, function ($frase) {
            return trim($frase) !== '';
        });

        return count($frases);
    }

    function encontrarMaiorPalavra(array $palavras): string
    {
        $maior = '';
        foreach ($palavras as $palavra) {
        if (strlen($palavra) > strlen($maior)) {
        $maior = $palavra;
        } 
    }

     return $maior;
    
}

function encontrarMenorPalavra(array $palavras): string { 
    $menor = $palavras[0]; 
    foreach ($palavras as $palavra) { 
        if (strlen($palavra) < strlen($menor)) { 
            $menor = $palavra; } } 

            return $menor; 
}
