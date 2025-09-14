<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "db_connect.php"; // include connection

        // Insert query
        $sql = "insert into students (name,age) values ('Nikhil',20)";

        // Run query
        if(mysqli_query($conn,$sql)){
            echo "Record inserted successfully";
        }
        else{
            echo "Error : ".mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>