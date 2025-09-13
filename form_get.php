<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="">
        <label>Name :</label>
        <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>
    <?php
        if (isset($_GET['username'])) {
            echo "Hello, ".($_GET['username']);
        }
    ?>
</body>
</html>