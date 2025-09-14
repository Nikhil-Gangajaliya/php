<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Set cookie (expire in 1 hour)
    setcookie("username", "Nikhil", time() + 3600, "/");

    if (isset($_COOKIE["username"])) {
        echo "Welcome back, " . $_COOKIE["username"];
    } else {
        echo "Cookie not set.";
    }
    // Expire the cookie
    setcookie("username", "", time() - 3600, "/");
    echo "Cookie deleted.";
    ?>

</body>

</html>