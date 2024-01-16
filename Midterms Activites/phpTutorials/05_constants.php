<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>
<body>
    <?php
        echo "Constant Example<br>";
        define("MINSIZE", 50);
        echo MINSIZE;
        echo constant("MINSIZE"); // same thing as the previous line

        echo "<br><br>Valid and Invalid Constant Names<br>";
        // Valid Constant Names

        define("ONE",   "first thing");
        define("TWO2",  "second thing");
        define("THREE_3", "third thing");

        //Invalid Constand Names
        //define("2TWO",  "second thing");
        //deifne ("__THREE__", "third value");

        echo constant("ONE");
        echo "<br>";
        echo constant("TWO2");
        echo "<br>";
        echo constant("THREE_3");


    ?>
</body>
</html>