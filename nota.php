<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
    <link rel="stylesheet" href="css/principal.css">
    <script>
        function calcularMedia() {
            var n1 = document.getElementById('n1').value ? parseFloat(document.getElementById('n1').value) : 0;
            var n2 = document.getElementById('n2').value ? parseFloat(document.getElementById('n2').value) : 0;
            var n3 = document.getElementById('n3').value ? parseFloat(document.getElementById('n3').value) : 0;
            var n4 = document.getElementById('n4').value ? parseFloat(document.getElementById('n4').value) : 0;

            // Verifique se todos os campos estão vazios
            if (n1 === 0 && n2 === 0 && n3 === 0 && n4 === 0) {
                alert("Por favor, digite pelo menos uma nota.");
                return;
            }

            // Verifique se alguma nota é maior que 10
            if (n1 > 10 || n2 > 10 || n3 > 10 || n4 > 10) {
                alert("Por favor, insira notas de 0 a 10.");
                return;
            }

            var media = (n1 + n2 + n3 + n4) / 4;

            var mensagem = document.getElementById('mensagem');
            if (media >= 8) {
                mensagem.textContent = "Parabéns! Sua média é: " + media + ". Você tem um grande potencial!";
            } else if (media >= 6) {
                mensagem.textContent = "Parabéns! Sua média é: " + media + ". Continue assim!";
            } else {
                mensagem.textContent = "Sua média é: " + media + ". Você está indo bem, mas pode melhorar ainda mais. Continue se esforçando!";
            }
            mensagem.style.display = 'block';
        }

        function fecharMensagem() {
            document.getElementById('mensagem').style.display = 'none';
        }
    </script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            transition: background-color 0.5s ease;
        }

        p {
            font-size: 1.2em;
            text-align: justify;
        }

        #inicio h1 {
            font-size: 2.8em;
            color: blue;
            font-weight: bold;
        }

        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 800px;
            height: fit-content;
            line-height: 48px;
        }

        .dark-mode {
            background-color: #444;
            color: white;
        }

        #mensagem {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border: 1px solid black;
            background-color: white;
        }
    </style>

</head>

<body id="Nota">
    <a href="index.php">Início</a>
    <h1>Cadastro das Notas dos Alunos</h1>
    <form onsubmit="event.preventDefault(); calcularMedia();">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <label for="serie">Série:</label>
        <input type="text" id="serie" name="serie">
        <label for="turma">Turma:</label>
        <input type="text" id="turma" name="turma">
        <label for="turno">Turno:</label>
        <input type="text" id="turno" name="turno">
        <label for="n1">Nota 1:</label>
        <input type="text" id="n1" name="n1">
        <label for="n2">Nota 2:</label>
        <input type="text" id="n2" name="n2">
        <label for="n3">Nota 3:</label>
        <input type="text" id="n3" name="n3">
        <label for="n4">Nota 4:</label>
        <input type="text" id="n4" name="n4">
        <input type="submit" value="Calcular Média">
        

        <button type="button" onclick="salvarDados()">Salvar</button>


    </form>
    <button onclick="toggleDarkMode()">Claro ou Escuro</button>
    <div id="mensagem" style="display: none;">
        <button onclick="fecharMensagem()">Fechar</button>
    </div>
    <script>
        function toggleDarkMode() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }

        function salvarDados() {
            alert("Dados salvos com sucesso!");
        }
    </script>
</body>

</html>