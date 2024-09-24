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
    <h3>Functies met PHP</h3>

    <?php        
        $getal1 = 10;
        $getal2 = 5;
        $som = $getal1 + $getal2;

        echo "<p>De som van $getal1 + $getal2 = $som</p>";

        $getal1 = 20;
        $getal2 = 10;
        $som = $getal1 + $getal2;

        echo "<p>De som van $getal1 + $getal2 = $som</p>";

        $getal1 = 40;
        $getal2 = 80;
        $som = $getal1 + $getal2;

        echo "<p>De som van $getal1 + $getal2 = $som</p>";

        function naamOpScherm($voornaam, $tussenvoegsel = NULL, $achternaam = NULL) 
        {
            echo "<p>Dit is mijn eerste functie en mijn naam is $voornaam $tussenvoegsel $achternaam</p>";
        }

        naamOpScherm('Arjan', 'de', 'Ruijter');
        naamOpScherm('Bert', 'de', 'Vries');
        naamOpScherm('Ronald');

        /**
         * Opdracht:
         * Zet ook nog het tussenvoegsel bij de functie zodat de volledige naam
         * met tussenvoegsel op het scherm komt. Verander ook de functienaam 
         * naar een beter passende dan berekenSom()
         */

         /**
          * Maak een functie berekenSom() die twee getallen kan optellen. Het is verplicht om
          * Twee getallen mee te geven aan de functie. Roep de functie 3 maal aan
          * met de waarden (3, 4) (9, 7) en (4, 2). De output is:
          * De som van 3 + 4 = 7
          * De som van 9 + 7 = 16
          * De som van 4 + 2 = 6
          */
       

    ?>
    
</body>
</html>