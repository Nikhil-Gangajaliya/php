<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "db_connect.php";

        $sql = "update students set age = 22 where name ='OM'";

        if(mysqli_query($conn,$sql)){
            echo "Record Updated Successfully";
        }
        else{
            echo "Error : ". mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>