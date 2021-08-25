<?php
    include_once "./includes/addFiles.php";
    include_once "./includes/addDirectory.php";
    include_once "./includes/showFilesAndDirectory.php";
    include_once "./includes/deleteAll.php";
    if(isset($_POST['addFichier'])){
        addFilesInBdd($_FILES["addFiles"]);
    }
    if(isset($_POST['addDirectory'])){
        addDirectory($_POST['nameDirectory']);
    }
    if(isset($_POST["deleteAll"])){
        $delete = deleteAll();
    }
    $files = afficher();
    foreach($files as $file){
        echo $file["name"]."<br>";
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test GodDrive</title>
</head>
<body>
    <div class="fichiers">
        <form method="POST" enctype="multipart/form-data">
            <input type='file' name='addFiles'/>
            <input type="submit" name="addFichier" value="Ajouter un fichier"/><br>
            <input type="text" name="nameDirectory"/>
            <input type="submit" name="addDirectory" value="Ajouter un dossier"/>
            <input type="submit" name="deleteAll" value="Tout supprimer"/>
        </form>
    </div>
</body>
</html>