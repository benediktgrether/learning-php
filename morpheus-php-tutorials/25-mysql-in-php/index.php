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
        $servername = "localhost";
        $user = "root";
        $password = "root";

        $connection = new mysqli($servername, $user, $password);

        if ($connection->connect_error) {
            die("No Connection; " . $connection->connect_error);
        }

        echo "connected";
    ?>

</body>

</html>