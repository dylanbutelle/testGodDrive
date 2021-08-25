<?php
    include_once "includes/connect.php";


    function addFilesInBdd($files){
        $connect = connexion();
        $origine = $files["tmp_name"];
        $destination = 'C:/xamp2/htdocs/testGodDrive/files/'.$files["name"];
        move_uploaded_file($origine,$destination);
        $request = $connect->prepare("INSERT INTO files(id, name, path, weight, date, corbeille) VALUES ('','$files[name]','$destination','$files[size]',NOW(),'false')");
        $request->execute();
    }
?>
