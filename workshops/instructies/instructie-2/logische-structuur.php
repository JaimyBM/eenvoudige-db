<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php

            echo "Hello World! <br>";

            //3 variabelen met naam, leeftijd en ben je student ja/nee.
            $age = 17;
            $name = "Jaimy";
            $isStudent = true;
            $hasLicense = true;


            if($isStudent == true)
            {
                $studentText = "ik ben een student!";
            }
            else
            {
                $studentText = "Ik ben geen student!";
            }

            //Check die controleer of je 18 jaar of ouder bent. Ik mag autorijden anders ik mag geen auto rijden.

            if ($age >= 18 && $hasLicense == true)
            {
                $driveText = "Ik mag auto rijden!";
            }
            elseif ($age >= 18){
                $driveText = "Ik mag geen auto rijden maar ik ben wel 18+";
            }
            else
            {
                $driveText = "Ik mag geen auto rijden!";
            }


            echo "Hallo, mijn naam is $name! Ik ben $age jaar oud, en $studentText en $driveText";
        ?>
    </body>
</html>