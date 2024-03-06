<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <div>
        <form action="register_student.php" method="post">
            <label for="name">Nome:</label>
            <input id="name" name="name" type="text" placeholder="Digite o nome" required>

            <label for="registration">Sua matrícula:</label>
            <input id="registration" name="registration" type="text" placeholder="Digite sua matrícula" required>

            <label for="course">Curso:</label>
            <input id="course" name="course" type="text" placeholder="Digite o curso" required>

            <label for="password">Senha:</label>
            <input id="password" name="password" type="password" placeholder="Digite a senha" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>

</html>