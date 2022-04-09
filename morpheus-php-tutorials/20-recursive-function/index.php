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
        function addition($n) {
            if($n < 1) {
                return;
            }
            echo $n . "<br>";
            addition($n - 1);
        }

        addition(5);
    ?>
</body>
</html>