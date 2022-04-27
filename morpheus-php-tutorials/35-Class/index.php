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
        class User {
            var $ID;
            var $name;

            function printUser() {
                echo $this->ID . " " . $this->name . "<br>";
            }
        }

    $user = new User();
    $user->ID = 1;
    $user->name = "skippy";

    $user->printUser();

    $user2 = new User();
    $user2->ID = 2;
    $user2->name = "Batman";

    $user2->printUser();

    ?>
</body>
</html>