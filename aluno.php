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

<body id="aluno">
    <a href="index.php">Início</a>
    <h1>Cadastro dos Alunos</h1>
    <form action="" method="post">
        <label for="matricula">Matrícula</label>
        <input type="text" name="matricula" id="matricula" placeholder="Digite a matrícula">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do aluno">
        <label for="datanascimento">Data do Nascimento</label>
        <input type="date" name="datanascimento" id="datanascimento">
        <label for="genero">Gênero</label>
        <input type="radio" name="genero" id="genero" value="Masculino">Masculino
        <input type="radio" name="genero" id="genero" value="Feminino">Feminino
        <input type="button" value="Enviar">



    </form>
    <button onclick="toggleDarkMode()">Toggle Dark Mode</button>



    <script>
    function toggleDarkMode() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
    </script>
</body>

</html>