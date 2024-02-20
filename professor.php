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

<body id="professor">
    <a href="index.php" target="_blank" rel="noopener noreferrer">Início</a>
    <h1>Professores</h1>
    <table>
        <tr>
            <th>Disciplina</th>
            <th>Professor(a)</th>
        </tr>
        <tr>
            <td>Matemática</td>
            <td>Pedro do Vale</td>
        </tr>
        <tr>
            <td>Português</td>
            <td>Bianca Lacerda</td>
        </tr>


    </table>

    <button onclick="toggleDarkMode()">Claro ou Escuro</button>
    <script>
        function toggleDarkMode() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>
</body>

</html>