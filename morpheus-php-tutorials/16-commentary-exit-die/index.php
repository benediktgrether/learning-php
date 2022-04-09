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
        $persons = array("alice" => 3, "bob" => 6, "marcus"  => 1, "thomas" => 8, "ralph" => 76, "florian" => 1, "dieter" => 32);

        asort($persons);

        // End of php with die or exit
        // die();
        // exit();

        foreach($persons as $person) {
            echo $person."<br>";
        }
    ?>
</body>
</html>