<?php

include('PessoaDAO.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $resultado = login($usuario, $senha);

    if ($resultado) {
        session_start();
        $_SESSION['usuario'] = $resultado['usuario'];
        header("Location:Listar.php"); 
        exit();
    } else {
        echo "<script>alert('Usuário ou senha incorretos!'); window.location.href = 'login.php';</script>";
    }
}
?>