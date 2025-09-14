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
        // Step 4: SQL query to fetch data
        $sql = "select id, name, age from students";
        $result = mysqli_query($conn,$sql);

        // Step 5: Check if records exist
        if(mysqli_num_rows($result)>0){
            // Step 6: Loop through each row
            while($row = mysqli_fetch_assoc($result)){
                echo "* ID : ". $row["id"]. " * Name : ". $row["name"]. " * Age : ". $row["age"]."<br>";
            }
        }
        else{
            echo "No record Found !";
        }
        mysqli_close($conn);
        
    ?>
</body>
</html>