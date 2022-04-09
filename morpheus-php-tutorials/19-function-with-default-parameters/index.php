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
        /**
         * b has defaultparameter and only set if b don't have a user input
         */
        function addition($a, $b=42) {
            return $a + $b;
        }

        $sum = addition(5, 43);
        echo $sum;
    ?>
</body>
</html>