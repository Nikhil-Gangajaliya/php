<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form method="POST" action="">
        <label>Name :</label>
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form> -->
  
    <form method="POST" action="">
        <label for="name">Name </label>
        <input type="text" name="name">

        <label for="age">Age </label>
        <input type="number" name="age">

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        echo "Hello $name, You are $age years old.";
    }
    ?>

</body>

</html>