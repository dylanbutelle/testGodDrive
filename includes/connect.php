<?php

    function connexion(){
        $user = "root";
        $pass = "";

        try{
            $dbh = new PDO('mysql:host=localhost;dbname=goddrivetest', $user, $pass);
        }catch (Exception $exception){
            echo "Erreur".$exception;
        }
        return $dbh;
    }
?>