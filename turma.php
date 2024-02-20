<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
    <link rel="stylesheet" href="css/principal.css">
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

<body id="turma">
    <a href="index.php">Início</a>
    <h1>Cadastro das Turmas</h1>
    <form action="/salvar" method="post">
        <label for="serie">Série:</label><br>
        <input type="text" id="serie" name="serie"><br>
        <label for="turma">Turma:</label><br>
        <input type="text" id="turma" name="turma"><br>
        <label for="turno">Turno:</label><br>
        <input type="text" id="turno" name="turno"><br>
        <input type="submit" value="Salvar">
        <button type="button" onclick="salvarDados()">Salvar</button>
    </form>
    <button onclick="toggleDarkMode()">Claro ou Escuro</button>
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