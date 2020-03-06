
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form method="POST">
            Enter num1: <br>
            <input type="text" name="num1"> <br>
            Enter num2: <br>
            <input type="text" name="num2"> <br>
            <button type="submit">
            Submit
            </button>
        
        </form>

</body>
</html>

<br>
<br>

<?php

    if( $_SERVER["REQUEST_METHOD"] == "POST" ){
        function custom_error( $err_no, $err_msg, $f, $line ) {
            echo "<b>Error no:</b> [$err_no] <br>";
            echo "<b>Error msg:</b> [$err_msg] <br>";
            echo "<b>Error file:</b> [$f] <br>";
            echo "<b>Error line:</b> [$line] <br>";
            
            echo "<br><br>";
    
            $err_msg = "Please correct it";
            echo "<b>Custom msg:</b> [$err_msg] <br>";
        }
    
        set_error_handler("custom_error");
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        
        $num3 = $num1 / $num2;
        
        // set_error_handler("custom_error",E_USER_ERROR);
        // if $num3 == 0;  trigger_error("this is user denfined error",E_USER_ERROR);

        echo "<b>Answer: </b> $num3";
    }    

?>