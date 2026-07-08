<?php

1- function calcularIMC($peso, $altura) {
    if ($altura <= 0) {
        return "Altura inválida. A altura deve ser maior que zero.";
    }
    $imc = $peso / ($altura * $altura);
    return round($imc, 2);
}

function classificarIMC($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 25) {
        return "Peso normal";
    } elseif ($imc >= 25 && $imc < 30) {
        return "Sobrepeso";
    } else {
        return "Obesidade";
    }
}

2- function validarEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
        return "O email é válido.";
    } else {
        return false;
        return "O email é inválido.";
    }
}

3- function gerarSenha($tamanho) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';
    $senha = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $senha;
    return "Esta é a senha aleatoria gerada";
}

4- function contarVogais($texto) {
    $texto = strtolower($texto);
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;
    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], $vogais)) {
            $contador++;
        }
    }
    return $contador;
    return "Esta é a quantidade de vogais existentes no texto informado";
}

5- function inverterTexto($texto) {
    $textoInvertido = strrev($texto);
    return $textoInvertido;
    return "Este é o texto invertido";
}

6- function calcularIdade($dataNascimento) {
    $dataNascimento = new DateTime($dataNascimento);
    $dataAtual = new DateTime();
    $idade = $dataAtual->diff($dataNascimento)->y;
    return $idade;
    return "Esta é a idade calculada a partir da data de nascimento informada";
}

7- function converterMoeda($valor, $moedaOrigem, $moedaDestino) {
    $taxasConversao = [
        'USD' => 1,
        'EUR' => 0.85,
        'BRL' => 5.25,
    ];

    if (!isset($taxasConversao[$moedaOrigem]) || !isset($taxasConversao[$moedaDestino])) {
        return "Moeda inválida.";
    }

    $valorConvertido = ($valor / $taxasConversao[$moedaOrigem]) * $taxasConversao[$moedaDestino];
    return round($valorConvertido, 2);
    return "Este é o valor convertido de uma moeda para outra";
}

8- function formatarTelefone($telefone) {
    $telefone = preg_replace('/\D/', '', $telefone);
    if (strlen($telefone) === 10) {
        return preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $telefone);
    } elseif (strlen($telefone) === 11) {
        return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $telefone);
    } else {
        return "Número de telefone inválido.";
    }
    return "Este é o número de telefone formatado";
}

9- function saudaçãoHorário() {
    $horaAtual = date('H');
    if ($horaAtual < 12) {
        return "Bom dia!";
    } elseif ($horaAtual < 18) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
    return "Esta é a saudação de acordo com o horário do dia";
}

10- function validarSenhaForte($senha) {
    $temMaiuscula = preg_match('/[A-Z]/', $senha);
    $temMinuscula = preg_match('/[a-z]/', $senha);
    $temNumero = preg_match('/[0-9]/', $senha);
    $temCaractereEspecial = preg_match('/[\W]/', $senha);

    if ($temMaiuscula && $temMinuscula && $temNumero && $temCaractereEspecial && strlen($senha) >= 8) {
        return true;
        return "A senha é forte.";
    } else {
        return false;
        return "A senha não é forte.";
    }
}