<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
    <link rel="stylesheet" href="css/principal.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    </style>

</head>

<body id="frequencia">
    <a href="index.php">Início</a>
    <h1>Cadastro de Frequência</h1>
    <form action="/salvar" method="post">
        <label for="nome">Nome do Aluno:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="turma">Turma:</label><br>
        <input type="text" id="turma" name="turma"><br>
        <label for="turno">Turno:</label><br>
        <input type="text" id="turno" name="turno"><br>
        <label for="serie">Série:</label><br>
        <input type="text" id="serie" name="serie"><br>
        <label for="data">Data (Dia/Mês/Ano):</label><br>
        <input type="date" id="data" name="data"><br>
        <input type="submit" value="Salvar">
    </form>

    <button onclick="toggleDarkMode()">Claro ou Escuro</button>
    <script>
        function toggleDarkMode() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>
</body>

</html>