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

        if ($getal != 5) {
            echo "<p>Het getal $getal is niet gelijk aan 5</p>";
        } else {
            echo "<p>Het getal $getal is gelijk aan 5</p>";
        }
    ?>

    <h5>De AND (&&) operator (Beide beweringen moeten waar zijn)</h5>

    <?php
        $getal = 100;
        if ($getal > 5 && $getal < 15) {
            echo "<p>Het getal $getal is groter dan 5 en kleiner dan 15</p>";
        } else {
            echo "<p>Het getal $getal is kleiner of gelijk aan 5 of groter of gelijk aan 15</p>";
        }
    ?>

   <h5>De OR (||) operator (Een van de beweringen moet waar zijn)</h5>
   
   <?php
    $inkomen =  301000;
    $heeftRijkeOom = false;

    if ($inkomen > 300000 || $heeftRijkeOom == true) {
        echo "<p>U kunt bij ons een Ferrari kopen</p>";
    } else {
        echo "<p>Uw inkomen is te laag of u heeft geen rijke oom, u mag geen Ferrari kopen</p>";
    }

    /**
     * Maak een functie die kan checken of een getal even of oneven is
     * Voorbeeld:
     * 
     * evenOfOneven(202); //Output: Het getal 202 is een even getal
     * 
     */

     function evenOfOneven($getal)
     {
        if ($getal % 2) {
            echo "<p>Het getal $getal is oneven</p>";
        } else {
            echo "<p>Het getal $getal is even</p>";
        } 
     } 

     evenOfOneven(202);
     evenOfOneven(1);
     evenOfOneven(2);
     evenOfOneven(3);

     /**
      * Maak een functie kilometerVergoeding($aantalKilometers) die de vergoeding berekent
      * voor het aantal gereden kilometers.
      * Voor de eerste 10 km krijg je 0.3 euro per km.
      * Tussen de 10 km en 30 km krijg je 0.5 euro per km.
      * Boven de 30 km krijg je 0.8 euro per km.
      * 
      * Voorbeeld:
      * kilometerVergoeding(50);
      * Output: U krijgt 29 euro reiskostenvergoeding voor 50km
      */

      function kilometerVergoeding($kilometers)
      {
        $vergoeding = 0;
        if ($kilometers <= 10) {
            $vergoeding += $kilometers * 0.3;
        } elseif ($kilometers > 10 && $kilometers <= 30) {
            $vergoeding = 3 + ($kilometers - 10) * 0.5;
        } else {
            $vergoeding = 3 + 10 + ($kilometers - 30) * 0.8;
        }
        echo "<p>U krijgt $vergoeding euro voor $kilometers km</>";
      }

      kilometerVergoeding(50);
      kilometerVergoeding(5);
      kilometerVergoeding(20);
      kilometerVergoeding(50);


   ?>



</body>
</html>