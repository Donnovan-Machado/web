<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #b9a9c4; 
        }

        .login-container {
            background-color: #ffffff; 
            border: 2px solid #242126; 
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .login-container h1 {
            color: #242126;
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0px;
            border: 1px solid #242126;
            border-radius: 5px;
        }

        .login-container input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-container button:hover {
            background-color: #45a049; 
        }

        .login-container a {
            color: #4caf50;
            text-decoration: none;
            font-size: 14px;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form action="loginControle.php" method="post">
            <label for="usuario">Insira seu usuário: </label>
            <input type="text" name="usuario" id="usuario">
            <label for="senha">Insira sua senha: </label>
            <input type="password" name="senha" id="senha">
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
