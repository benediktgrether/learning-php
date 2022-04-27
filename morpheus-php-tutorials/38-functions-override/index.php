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

            function printUser() {
                echo $this->ID . " " . $this->name . " get 100 ponus points for this order" . "<br>";
            }
        }

        class Infidel extends User {
            function billing() {
                echo "Werbung";
            }
        }

    $user = new User(1, "skippy");
    $user2 = new SuperUser(2, "Batman");
    $user3 = new Infidel(3, "Noob");

    $users = array($user, $user2, $user3);

    for($i = 0; $i < 3; $i++) {
        $users[$i]->printUser();
    }

    ?>
</body>
</html>