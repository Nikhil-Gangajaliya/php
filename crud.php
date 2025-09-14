<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Team Form</h2>
    <form method="POST">
        ID : <input type="number" name="id"><br>
        Name : <input type="text" name="name"><br>
        Age : <input type="number" name="age"><br>

        <button type="submit" name="insert">Insert</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="delete">Delete</button>
    </form>
    <?php
    $servername = "localhost:3307";
    $username = "root";
    $pw = "";
    $dbname = "student_db";

    $conn = mysqli_connect($servername, $username, $pw, $dbname);
    if (!$conn) {
        die("Connection Failed : " . mysqli_connect_error());
    }

    // Insert (Create)
    if (isset($_POST['insert'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $sql = "insert into team (name , age) values ('$name','$age')";
        mysqli_query($conn, $sql);
        echo "Inserted Successfully<br>";
    }

    //update
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $sql = "update team set name = '$name' where age = '$age'";
        mysqli_query($conn, $sql);
        echo "Updated<br>";
    }

    //delete
    if (isset(($_POST['delete']))) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $sql = "delete from team where age='$age'";
        mysqli_query($conn, $sql);
        echo "Deleted<br>";
    }

    //fetch(display)
    $result = mysqli_query($conn,"select * from team");
    // echo "<h3>Team Member</h3>";
    // {
        // echo "Id : " . $row['id'] . "Name : " . $row['name'] . "Age : " . $row['age'];
    // }

    if (mysqli_num_rows($result) > 0) {
        echo "<h3>Team Members</h3>";

        echo "<table border='1'>";
        // ---------- Print table headers dynamically ----------
        echo "<tr>";
        // Get column names from result
        while ($field = mysqli_fetch_field($result)) {
            echo "<th>" . $field->name . "</th>";
        }
        echo "</tr>";

        // ---------- Print table rows ----------
        // Reset result pointer back to start (because fetch_field() moved it)
        mysqli_data_seek($result, 0);
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            foreach($row as $col=>$value){
                echo "<td>". $value. "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    else{
        echo "-";
    }

    mysqli_close($conn);


    ?>
</body>

</html>