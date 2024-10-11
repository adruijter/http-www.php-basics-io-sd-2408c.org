<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>PHP Basics</title>
</head>
<body>
    <h3>Operatoren met PHP</h3>

    <h5>Assignmentoperator (toewijzingsoperator = )</h5>
    <?php
        $teller = 30;
        echo "<p>$teller</p>"; // Output is 30
    ?>

    <h5>Arithmic Assignmentoperator (rekenkundige toewijzingsoperator)</h5>

    <?php
        //Optellen
        $teller += 30;
        echo "<p>$teller</p>"; // Output is 60

        //Aftrekken
        $teller -= 20;
        echo "<p>$teller</p>"; // Output is 40

        //Vermenigvuldigen
        $teller *= 3;
        echo "<p>$teller</p>"; // Output is 120

        //Delen
        $teller /= 60;
        echo "<p>$teller</p>"; // Output is 2

        //Machtsverheffen
        $teller **= 8;
        echo "<p>$teller</p>"; // Output is 256

        //Concatenate string
        $teller .= " euro";
        echo "<p>$teller</p>"; // Output is 256 euro

        //Modulo
        $teller = 16;
        $teller %= 3;
        echo "<p>$teller</p>"; // Output is 1
    ?>

    <h5>Increment (++) en de decrement (--) operator</h5>

    <?php
        $number = 100;
        $number++;
        echo "<p>$number</p>";

        echo "<hr>";

        $number = 200;
        $number--;
        echo "<p>$number</p>";
    ?>

    <h5>Comparison operator</h5>

    <?php
        /**
         * is gelijk aan:          ==
         * is niet gelijk aan:     !=
         * is groter dan:           >
         * is kleiner dan:          <
         * is kleiner gelijk aan    <=
         * is groter gelijk aan     >= 
         */

        $getal = 5;
        if ($getal == 5) {
            echo "<p>Het getal $getal is gelijk aan 5</p>";
        } else {
            echo "<p>Het getal $getal is niet gelijk aan 5</p>";
        }

        if ($getal > 3) {
            echo "<p>Het getal $getal is groter dan 3</p>";
        } else {
            echo "<p>Het getal $getal is kleiner of gelijk aan 3</p>";
        }

        if ($getal < 10) {
            echo "<p>Het getal $getal is groter dan 3</p>";
        } else {
            echo "<p>Het getal $getal is groter of gelijk aan 10</p>";
        }

    ?>

</body>
</html>