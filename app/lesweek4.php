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
    <h3>Controlestructuren met PHP</h3>

    <?php 
        /**
         * Met een if-else controlestructuur kunnen we keuzes maken
         * in onze programma
         */

        $waarOfNiet = false;

        if ($waarOfNiet) {
            echo "<p>Het is waar</p>";
        } else {
            echo "<p>Het is niet waar</p>";
        }

        /**
         * Gebruik een if-else controlestructuur om de volgende tekst
         * op het scherm te zetten
         * 
         * $mooiWeerOfNiet = "Mooi Weer"; //Output: Het is mooi weer vandaag
         * 
         * Maak een nieuwe elseif voor "Koud Weer"
         */
        $mooiWeerOfNiet = "Mooi Weer";

        if ($mooiWeerOfNiet == 'Mooi Weer') {
            echo "<p>Het is mooi weer vandaag</p>";
        } elseif ($mooiWeerOfNiet == "Slecht Weer") {
            echo "<p>Het is slecht weer vandaag</p>";
        } elseif ($mooiWeerOfNiet == "Koud Weer") {
            echo "<p>Het is koud weer vandaag</p>";
        } else {
            echo "<p>Het weer is onbekend vandaag</p>";
        }

        /**
         * Maak 3 indexed arrays genaamd io-sd-2408a, io-sd-2408b en io-sd2408c
         * Elk array bevat 3 voornamen
         * Maak een functie die checked in welk van de drie klassen een student 
         * zit.
         * De functie neemt een voornaam als argument aan (verplicht) 
         * gebruik de php-functie in_array()
         * 
         * klasZoeker('Arjan') // Output: Arjan zit in klas IO-SD-2408A
         */



    ?>

</body>
</html>