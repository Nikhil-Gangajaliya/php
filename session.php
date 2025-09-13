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
    $_SESSION["username"] = "Nikhil";
    $_SESSION["age"] = 20;

    echo "Student details are set<br>";
    echo " Username : " . $_SESSION["username"] . "<br>Age : " . $_SESSION["age"];

    // session_unset();  // remove session variables
    // session_destroy(); // destroy session completely
    // echo "Session ended.";


    ?>
</body>

</html>