<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();

        if(isset($_SESSION["username"])){
            echo "Username : ".$_SESSION["username"];
        }
        else{
            echo "No user found";
        }
    ?>
</body>
</html>