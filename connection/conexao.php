<?php

    session_start();
    #Conexao com o banco de dados

    class Conexao{
        public $pdo;

        public function conectarDB(){
            global $pdo;

            # ------------------- #
            
            $host = "localhost";
            $nome_banco = "db_banner";
            $usuario = "root";
            $senha = "";
            // $porta_http = "";

            # ------------------- #

            try {
                $pdo = new PDO("mysql:host=".$host.";dbname=".$nome_banco ,$usuario,$senha);
                //echo '<script> console.log("DB_CONNECTED") </script>';
                
            } catch (PDOException $erro) {
                //echo '<script> console.log("DB_CONNECTION_FAILURE=> '.$erro.'") </script>';
                
            }
        }
    }
?>