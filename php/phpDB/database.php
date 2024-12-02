 <!-- Função que conecta com o banco de dados  mysql e retorna a conexão com o banco ou false -->
 <?php

function conectDb() {
    $user="root";
    $password="aluno";
    $database="crud";
    $host="localhost";
    $db= new PDO( "mysql:host=localhost;dbname=$database", $user, $password );

    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // try { 
        // $db->exec("SHOW TABLES"); 
    // } catch (PDOException $e){
        // echo "". $e->getMessage() . "";
    // }    

    if ($db) {
        return $db;
    }
    else {
        return false;
    }

}

function check_conn($conn_id): void{
    if ($conn_id ) {
        echo "Conexao feita";
}
    else {
        echo "Erro nao conectao";
}
}
var_dump( conectDb());
check_conn( conectDb());

 ?>