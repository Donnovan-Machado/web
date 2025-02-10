<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<style>
        body {
            display: flex;
            justify-content: center; 
            align-items: center; 
            min-height: 100vh; 
            margin: 0;
            background-color: #c7bfbf; 
            font-family: Arial, sans-serif;
        }

        form {
            width: 100%;
            max-width: 400px; 
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 1em;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%; 
            padding: 10px;
            margin-bottom: 15px; 
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        input[type="submit"] {
            width: 100%; 
            padding: 12px;
            background-color: #4CAF50; 
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049; 
        }
    </style>
<body>
    <form action="pessoaControle.php" method="post">
        <label for="nome">Nome </label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email </label>
        <input type="email" name="email" id="email">
        <label for="usuario">Usuário </label>
        <input type="text" name="usuario" id="usuario">
        <label for="senha">Senha </label>
        <input type="password" name="senha" id="senha">
        <input type="text" name="acao" value="cadastrar" hidden>
        <input type="submit" value="cadastrar">
    </form>
</body>
</html>
