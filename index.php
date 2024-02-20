<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
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

        table, tr, td {
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

<body id="inicio">
    <img src="imagens/logosenacv2.png" alt="logo senac" width="200px" height="auto">
    <h1>
        <b>Controle Acadêmico</b>
    </h1>
    <p>Bem vindo ao <b>sistema de controle academico</b>.</p>
    <p>Aqui você poderá consultar suas <a href="notas.php" alt="notas da turma" target="_self">notas.</a></p>
    <p>E também sua <i><a href="frequencia.php" alt="frequencia dos alunos">frequencia</a></i>.</p>

    <h2>Menu</h2>
    <ul>
        <li><a href="aluno.php">Alunos</a></li>
        <li><a href="professor.php">Professores</a></li>
        <li><a href="disciplina.php">Disciplinas</a></li>
        <li><a href="turma.php">Turmas</a></li>
        <li><a href="nota.php">Notas</a></li>
        <li><a href="frequencia.php">Frequencia</a></li>
    </ul>
    <button onclick="toggleDarkMode()">Toggle Dark Mode</button>

   

    <script>
        function toggleDarkMode() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>

</body>

</html>