<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="name">Name:
            <input type="text" name="name" id="name" />
        </label><br>
        <label for="email">Email:
            <input type="text" name="email" id="email" />
        </label><br>
        <input type="submit" value="submit" />
    </form>


    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Hallo " . $_POST["name"];
            "<br>";
            echo "email: " . $_POST["email"];
        }
    ?>

</body>

</html>