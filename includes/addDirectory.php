<?php
    function addDirectory($directoryName){
        mkdir("./files/".$directoryName,0777,true);
    }

?>
