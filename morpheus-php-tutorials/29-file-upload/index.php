<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // die(ini_get('upload_tmp_dir') ? ini_get('upload_tmp_dir') : sys_get_temp_dir());
        $target = "upload/";
        $file = $target . basename(($_FILES["fileUpload"]["name"]));
        if(move_uploaded_file($_FILES["fileUpload"]["tmp name"], $file)) {
            echo "File upload successfull";
        }
        else {
            echo "Error";
        }
    ?>
</body>
</html>