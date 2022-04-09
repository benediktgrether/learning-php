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
        $string = "Hello World!";
        $stringSpecialChar = "Hello \" World!";
        echo strlen($string)."\n";

        /**
         * Get the number of the words.
         */
        echo str_word_count($string)."\n";

        /**
         * String revers
         */
        echo strrev($string)."\n";
        echo "<br>";

        echo str_split($string, 2)[0]."\n";
        echo "<br>";

        echo str_replace("Hello", "Hi", $string);
        echo "<br>";

        /**
         * Check for Special Characters and remove it.
         */
        echo stripcslashes($stringSpecialChar);

    ?>
</body>
</html>