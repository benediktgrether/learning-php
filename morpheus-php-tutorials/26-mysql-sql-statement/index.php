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
        $db = "morpheusTutorial";

        $connection = new mysqli($servername, $user, $password, $db);

        if ($connection->connect_error) {
            die("No Connection; " . $connection->connect_error);
        }

        // $sql = "INSERT INTO User (Name, Password) VALUES ('Bruce Wayne', 'Batman')";

        // if($connection->query($sql) === TRUE) {
        //     echo "Registration successfull";
        // }
        // else {
        //     echo "Registarion not successfull" . $connection->connect_error;
        // }

        $sqlReturn = "SELECT * FROM User";
        $result = $connection->query($sqlReturn);

        if($result->num_rows > 0) {
            while($i = $result->fetch_assoc()) {
                echo "ID:" . $i["ID"] . " Name: " . $i["Name"];
            }
        }
        else {
            echo "No results";
        }

        $connection->close();
    ?>

</body>

</html>