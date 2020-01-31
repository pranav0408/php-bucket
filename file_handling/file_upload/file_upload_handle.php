<?php

    $target_path = "/var/www/html/php/uploaded_files_db/";
    $target_path = $target_path.basename( $_FILES['file']['name'] );
    echo "Temporary name is: ".$_FILES['file']['tmp_name']."<br>";
    echo "File type is: ".$_FILES['file']['type']."<br>";
    echo "File size is: ".$_FILES['file']['size']."<br>";
    
    echo "<br>";

    if( $_FILES['file']['type'] != 'application/pdf' ){
        die("File cannot be uploaded. File is not a <b>pdf</b>!");
    }

    if( move_uploaded_file($_FILES['file']['tmp_name'],$target_path) ){
        echo "File uploaded successfully <br>";
    }else{
        echo "Sorry. There was some problem in uploading the file";
    }

?>