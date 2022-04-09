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
        $numbers = array(3, 6, 1 ,5, 9, 2, 56, 42, 32, 2, 3, );
        sort($numbers);

        foreach($numbers as $number) {
            echo $number."<br>";
        }

        echo "<br>";

        $persons = array("alice" => 3, "bob" => 6, "marcus"  => 1, "thomas" => 8, "ralph" => 76, "florian" => 1);

        asort($persons);

        foreach($persons as $person) {
            echo $person."<br>";
        }
    ?>
</body>
</html>