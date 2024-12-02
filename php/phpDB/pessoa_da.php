<?php
include("database.php");
// função que recebe nome, email, e insere usuarios no bd
function insere_usuario ($nome ,$email):void{
    $db = conectDb();
    $sql = "INSERT INTO usuario(nome, email) VALUES (?, ?)";
    $stmt = $db->prepare(query: $sql);
    $stmt->bindParam(1,$nome, type: PDO::PARAM_STR);
    $stmt->bindParam(2, $email, type: PDO::PARAM_STR);
    $stmt->execute();

    try {
        $stmt->execute();
        echo "Usuario inserido com sucesso";
    } catch (PDOException $e) {
        echo "Erro ao inserir o usuario" . $e->getMessage();
    }
    $db=null;
}

fuction recupera_lista_usuarios() void{
    $db = conectDb();
    $stmt = $db->prepare(query: $sql);
    $stmt-> execute();
    $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($resultado);
};

recupera_lista_usuarios();
?>