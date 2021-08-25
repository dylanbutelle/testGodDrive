<?php
    include_once "./includes/connect.php";
    function deleteAll(){
        $connect = connexion();
        $requete = $connect->prepare("DELETE FROM files WHERE corbeille='0'");
        $requete->execute();
        return $requete->fetchAll();
    }

?>
