<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax Overview</title>
</head>
<body>
    <?php
        #Commenting PHP Code

         echo "Comment<br>";
         # This is a comment, and
         # This is the second line of the comment
         // This is a comment too

         print "Single line comments has a sytax of # or // <br>"

         #First Example
         <<<END
         This uses the "here document" syntax to output
         multiple lines with $variable interplation. Note
         that the here document terminator must appear on a
         line with just a semicolon no extra whitespace!
         END;

         #Second Example
         print "This spans
         multiple lines. The newlines will be
         output as well <br>";

         /* This is a comment with multiline
         Author : Mohammad Mohtashim
         Purpose: Multiline Comments Demo
         Subject: PHP */

         print "Multiline comments is written inside /* ... */";

         #PHP is whitespace insensitive

         echo "<br><br>Whitespace Insensitive"

         $four = 2+2; // single spaces
         $four <tab>=<tab2<tab>+<tab>2; // spaces and tabs
         $four = 
         2+
         2; // multiple lines

         #PHP is case sensitive

         echo "<br><br>Case Sensitive"

         $capital = 67;

         print ("Variable capital is $capital<br>");
         print ("Variable capital is $CaPiTaL<br>");

         #Statements are expressions terminated by semicolons

         $greeting = "Welcome to PHP!";

         #Expressions are combinations of tokens

         echo "<br><br>Braces Make Blocks<br>";

         if (3 == 2 + 1)
            print("Good - I haven't totally lost my mind.<br>");
            
        if (3 == 2 + 1)
            {
                print("Good - I haven't totally");
                print("lost my mind.<br>");
            }

    ?>
</body>
</html>