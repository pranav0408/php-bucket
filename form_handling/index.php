<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <style>
    p{
        width: 400px;
        max-width: 80vw;
        padding: 5px;
    }
    .err{
        background: #f1361596;
    }

    </style>
</head>
<body>
    
    <form method="POST">
        Name: <br>
        <input type="text" name="name" id="name"> <br>
        
        Email: <br>
        <input type="email" name="email" id="email"> <br>
        
        Gender: <br>
        Male:<input type="radio" name="gender" id="male" value="male">
        Female:<input type="radio" name="gender" id="male" value="Female">
        <br><br>
        
        <span>Select an option</span>
        <br>
        <select name="options" id="options">
            <option ></option>
            <option value="Option1">Option1</option>
            <option value="Option2">Option2</option>
            <option value="Option3">Option3</option>
            <option value="Option4">Option4</option>
        </select>
        <br><br>

        <input type="checkbox" name="agree" id="agree" >
        <span>Do you agree?</span>
        <br><br>

        Password: <br>
        <input type="password" name="password" id="password">
        <br>
        Confirm Password: <br>
        <input type="password" name="confirm-p" id="confirm-p">
        <br><br>

        <input type="submit" name="submit" value="submit">
    </form>

    <br>
    <br>
    <br>
 
    <?php 

        if( $_SERVER['REQUEST_METHOD'] == "POST" ){
            if( empty($_POST['name']) ){
                echo "<p class='err'>Please enter: <b>name</b></p>";
            }
            else{
                $name = $_POST['name'];
                echo "<p>Name entered is: <b>$name</b></p>";
            }

            if( empty($_POST['email']) ){
                echo "<p class='err'>Please enter: <b>email</b></p>";
            }
            else{
                $email = $_POST['email'];
                echo "<p>Email entered is: <b>$email</b></p>";
            }
            if( !isset($_POST['gender']) ){
                echo "<p class='err'>Please select: <b>gender</b></p>";
            }
            else{
                $gender = $_POST['gender'];
                echo "<p>Gender selected is: <b>$gender</b></p>";
            }
            if( empty($_POST['options']) ){
                echo "<p class='err'>Please select any one: <b>option</b></p>";
            }
            else{
                $option = $_POST['options'];
                echo "<p>Option selected is: <b>$option</b></p>";
            }
            if( empty($_POST['agree']) ){
                echo "<p class='err'>Please <b>Agree</b></p>";
            }
            else{
                $agree = $_POST['agree'];
                echo "<p>Agreement is: <b>$agree</b></p>";
            }
            if( empty($_POST['password']) ){
                echo "<p class='err'>Please enter: <b>Password</b></p>";
            }
            else{
                
            }

        }
            
    ?>

</body>
</html>