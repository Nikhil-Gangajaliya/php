<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $file = fopen("data.txt","w");
        fwrite($file,"Hello Nikhil Gangajaliya\n");
        fwrite($file,"How are you ?");
        fclose($file);
        echo"Data Writen to file Succesfully";
    ?>
</body>
</html>