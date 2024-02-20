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

<body id= "disciplina">
<a href="index.php">Início</a>
    <h1>Disciplinas</h1>
    <table>
        <tr>
            <th>Disciplina</th>
        </tr>
        <tr>
            <td>Matemática</td>
        </tr>
        <tr>
            <td>Português</td>
        </tr>
        <tr>
            <td>História</td>
        </tr>
        <tr>
            <td>Geografia</td>
        </tr>
        <tr>
            <td>Física</td>
        </tr>
        <tr>
            <td>Química</td>
        </tr>
        <tr>
            <td>Biologia</td>
        </tr>
        <tr>
            <td>Inglês</td>
        </tr>
        <tr>
            <td>Educação Física</td>
        </tr>
        <tr>
            <td>Artes</td>
        </tr>
    </table>

    <button onclick="toggleDarkMode()">Toggle Dark Mode</button>



    <script>
        function toggleDarkMode() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>


</body>

</html>