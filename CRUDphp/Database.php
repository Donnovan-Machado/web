<?php 
    function conecta(){
        $user="root";
        $senha="aluno";
        $database="crud";
        $host="localhost";
        
        $db = new PDO("mysql:host=$host;dbname=$database",$user,$senha);
        if($db){
            return $db;
        }else{
            return false;
        }
    }
    function chekConexao($connId){
        if($connId){
            echo "conectado";
        }else{
            echo "falha na conexão";
        }
    }
   
    
?>