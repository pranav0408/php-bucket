<?php

$files = scandir('/var/www/html/php/uploaded_files_db');
for( $a=2; $a<count($files); $a++ ){

    ?>
    <p><?php echo $files[$a]; ?>
    <a href="../../uploaded_files_db/<?php echo $files[$a] ?>"
        download="<?php echo $files[$a] ?>">
        Download
    </a>
    </p>
<?php
}

?>