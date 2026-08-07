<?php
// Painel de navegação da lista de exercícios de PHP.
// Este arquivo NÃO altera nenhum exercício: ele apenas lista botões que,
// ao serem clicados, buscam (via fetch) a saída do respectivo arquivo PHP
// e exibem o resultado dentro de um modal com visual de terminal.

$exercicios = [
    ["titulo" => "Exercício 01", "descricao" => "Calculadora da Engenharia", "arquivo" => "ex_01.php"],
    ["titulo" => "Exercício 02", "descricao" => "Espelho Mágico", "arquivo" => "ex_02.php"],
    ["titulo" => "Exercício 03", "descricao" => "Cadastro Seguro", "arquivo" => "ex_03.php"],
    ["titulo" => "Exercício 04", "descricao" => "Gerador de Senhas", "arquivo" => "ex_04.php"],
    ["titulo" => "Exercício 05", "descricao" => "Estatísticas de Texto", "arquivo" => "ex_05.php"],
    ["titulo" => "Exercício 06", "descricao" => "Conversor de Temperatura", "arquivo" => "ex_06.php"],
    ["titulo" => "Exercício 07", "descricao" => "Sistema de Descontos", "arquivo" => "ex_07.php"],
    ["titulo" => "Exercício 08", "descricao" => "Organizador de Lista", "arquivo" => "ex_08.php"],
    ["titulo" => "Exercício 09", "descricao" => "Verificador Matemático", "arquivo" => "ex_09.php"],
    ["titulo" => "Exercício 10", "descricao" => "Sistema de Notas", "arquivo" => "ex_10.php"],
    ["titulo" => "Exercício 11", "descricao" => "Formatador de Relatórios", "arquivo" => "ex_11.php"],
    ["titulo" => "Exercício 12", "descricao" => "Catálogo de Produtos", "arquivo" => "ex_12.php"],
    ["titulo" => "Exercício 13", "descricao" => "Criptografia Simples", "arquivo" => "ex_13.php"],
    ["titulo" => "Exercício 14", "descricao" => "Estatísticas Numéricas", "arquivo" => "ex_14.php"],
    ["titulo" => "Exercício 15", "descricao" => "Biblioteca de Funções", "arquivo" => "exercicio_15/index.php"],
];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Exercícios PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Lista de Exercícios PHP</h1>
    <p class="subtitulo">Clique em um exercício para rodar o arquivo e ver a saída em um terminal</p>

    <div class="grid">
        <?php foreach ($exercicios as $exercicio): ?>
            <button class="card" onclick="abrirTerminal('<?= htmlspecialchars($exercicio['arquivo']) ?>', '<?= htmlspecialchars($exercicio['titulo']) ?>')">
                <div class="titulo"><?= htmlspecialchars($exercicio['titulo']) ?></div>
                <div class="descricao"><?= htmlspecialchars($exercicio['descricao']) ?></div>
            </button>
        <?php endforeach; ?>
    </div>
    
    <div class="overlay" id="overlay" onclick="fecharAoClicarFora(event)">
        <div class="terminal">
            <div class="terminal-barra">
                <span class="bolinha vermelha"></span>
                <span class="bolinha amarela"></span>
                <span class="bolinha verde"></span>
                <span class="terminal-titulo" id="terminalTitulo">terminal</span>
                <button class="fechar" onclick="fecharTerminal()">✕</button>
            </div>
            <div class="terminal-corpo" id="terminalCorpo"></div>
        </div>
    </div>

    <script>
        async function abrirTerminal(arquivo, titulo) {
            const overlay = document.getElementById('overlay');
            const corpo = document.getElementById('terminalCorpo');
            const tituloEl = document.getElementById('terminalTitulo');

            tituloEl.textContent = `usuario@servidor: ~/${arquivo}`;
            corpo.innerHTML = '<span class="prompt">$ php ' + arquivo + '</span>Carregando...';
            overlay.classList.add('aberto');

            try {
                const resposta = await fetch(arquivo, {
                    cache: 'no-store'
                });
                const saida = await resposta.text();
                corpo.innerHTML = '<span class="prompt">$ php ' + arquivo + '</span>' + saida;
            } catch (erro) {
                corpo.innerHTML = '<span class="prompt">$ php ' + arquivo + '</span>Erro ao executar o arquivo: ' + erro;
            }
        }

        function fecharTerminal() {
            document.getElementById('overlay').classList.remove('aberto');
        }

        function fecharAoClicarFora(evento) {
            if (evento.target.id === 'overlay') {
                fecharTerminal();
            }
        }

        document.addEventListener('keydown', (evento) => {
            if (evento.key === 'Escape') {
                fecharTerminal();
            }
        });
    </script>

</body>

</html>