<?php
include("database.php");
include("pessoa_da.php");

if(isset($_POST["nome"]) && isset($_POST["email"])) {
    insere_usuario($nome,$email) ;
}
else {
    echo "Erro ao inserir usuário infrome os parametros corretamente";
}

?>