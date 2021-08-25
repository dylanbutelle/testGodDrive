<?php
    include_once "./includes/connect.php";
    function afficher(){
        $connect = connexion();
        $requete = $connect->prepare("SELECT name FROM files");
        $requete->execute();
        return $requete->fetchAll();
    }

?>
