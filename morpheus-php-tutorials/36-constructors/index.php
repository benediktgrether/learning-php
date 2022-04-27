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

            function __construct($setID, $setName)
            {
                $this->ID = $setID;
                $this->name = $setName;
            }

            function printUser() {
                echo $this->ID . " " . $this->name . "<br>";
            }
        }

    $user = new User(1, "skippy");
    $user->printUser();

    $user2 = new User(2, "Batman");
    $user2->printUser();

    ?>
</body>
</html>