<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
     <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label>Select File:</label>
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form>

    <?php 
        if(isset($_POST['submit'])){
            $targetdir = "C:/xampp/htdocs/prog/";   // use forward slashes + end with /
            
            // Create folder if not exists
            if(!is_dir($targetdir)){
                mkdir($targetdir, 0777, true);
            }

            // Target file path
            $targetFile = $targetdir . basename($_FILES["file"]["name"]);

            // Upload file
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)){
                echo "File uploaded successfully: " . basename($_FILES["file"]["name"]);
            }
            else{
                echo "Error while uploading.";
            }
        }
    ?>
</body>
</html>
