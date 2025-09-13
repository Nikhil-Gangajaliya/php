<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $file = fopen("data.txt","a");
        fwrite($file,"\nI need your Mobile number.. ");
        fclose($file);
        echo "Data Appende successfully!";
    ?>
</body>
</html>