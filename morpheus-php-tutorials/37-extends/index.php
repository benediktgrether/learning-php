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

use SuperUser as GlobalSuperUser;

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

        class SuperUser extends User {
            function bonus(){
                echo "You get bonus points" . "<br>";
            }
        }

        class Infidel extends User {
            function billing() {
                echo "Werbung";
            }
        }

    $user = new User(1, "skippy");
    $user->printUser();

    $user2 = new GlobalSuperUser(2, "Batman");
    $user2->printUser();
    $user2->bonus();

    $user3 = new Infidel(1, "Noob");
    $user3->printUser();
    $user3->billing();

    ?>
</body>
</html>