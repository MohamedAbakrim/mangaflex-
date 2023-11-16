<?php
    function connexion(){
        require "connect.php";
        $dsn = "mysql:host=".servername.";dbname=".dbname;
        try{
            $connect = new PDO($dsn, username, password);
        }
        catch (PDOException $e){
            echo "Eroor: " . $e->getMessage();
            exit();
        }
        return $connect;
    }
?>