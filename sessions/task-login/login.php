<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
    
        Name:   <br>
        <input type="text" name="name"> <br>
        Password:   <br>
        <input type="password" name="pass"> <br>
        <button type="submit">Submit</button>

    </form>


<br><br><br>
</body>
</html>


<?php

    $master_uname = "admin";
    $master_pass = "admin"; 

    if( $_SERVER['REQUEST_METHOD'] == "POST" ){
        session_start();
        if( isset($_POST['name']) && isset($_POST['pass']) ){
            $uname = $_POST['name'];
            $pass = $_POST['pass'];

            if( $uname == "admin" && $pass == "admin" ){
                $_SESSION['name'] = "admin";
                header('location: profile.php');
            }
            else{
                echo '<script language="javascript">';
                echo 'alert("Invalid email or password")';
                echo '</script>';
            }

        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Enter both fields")';
            echo '</script>';
        }
    }

?>