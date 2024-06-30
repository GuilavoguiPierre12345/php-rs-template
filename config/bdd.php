<?php 
    session_start();
    
    function bdd(){
        $servername="localhost";
        $dbname='rs';
        $password="";
        $username="root";
        $port="3306";

        try {
            $pdo =new PDO("mysql:host=$servername;port=$port;dbname=$dbname",$username,$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            return $pdo;

        } catch (PDOException $e) 
        {   
            echo "La connexion a echoue ".$e->getMessage();
        }
    }

    