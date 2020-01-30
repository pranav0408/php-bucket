<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP : Welcome</title>
</head>
<body>

    <h3>
        <?php 
            $name = $_POST['name'];
            echo "Hello $name";
        ?>
    </h3>
    <h4>
        <?php 
            $email = $_POST['email'];
            echo "Your email is :: $email";
        ?>
    </h4>

</body>
</html>