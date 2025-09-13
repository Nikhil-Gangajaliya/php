<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    session_unset();   // Remove session variables
    session_destroy(); // Destroy session
    echo "Session ended. <a href='session.php'>Start Again</a>";
    ?>

</body>

</html>