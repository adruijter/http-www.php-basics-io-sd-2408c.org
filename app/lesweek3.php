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

        /**
         * Programmeurs hanteren altijd het DRY principe
         * Don't Repeat Yourself
         */

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

          function berekenSom($getal1, $getal2) 
          {
                $som = $getal1 + $getal2;
                echo "<p>De som van $getal1 + $getal2 = $som</p>";
          }

          berekenSom(3, 4);
          berekenSom(9, 7);
          berekenSom(4, 2);

          /**
           * Maak een associatief array met twee getallen als sleutel waarde paar. Het array
           * heeft in totaal tien van deze sleutel-waarde paren. Gebruik een foreach-loop
           * om de som van deze twee getallen als sleutel-waarde paar op het scherm te krijgen.
           * Maak daarvoor een de functie berekenSom();
           */

           // dit array aan met nog 8 sleutel-waarde paren
           $getallenParen = array(
                3 => 5,
                6 => 8,
                5 => 2,
                9 => 4,
                12 => 13,
                23 => 2,
                45 => 6,
                50 => 50,
                42 => 4,
                100 => 45
           );

           foreach ($getallenParen as $getal1 => $getal2) {
                echo berekenSom($getal1, $getal2);
           }

           // passend examineren
           // Mail naar 18- studenten
           // Vrijstellingen

         /* Maak een functie die de tafel van 3 afbeeld op het scherm
            Gebruik hiervoor een array die de getallen 1 t/m 10 als data heeft

            tafel(3)

            output:

            De tafel van 3
            **************
            1 x 3 = 3
            2 x 3 = 6
            enz....
            10 x 3 = 30       
        */

        /**
         * Pas de functie tafel aan zodat je zelf een start- en stopwaarde kunt meegeven aan de functie
         * dus
         * 
         * tafel(6, 10, 12);
         * 
         * Output
         * ======
         * 
         * 10 x 6 = 60
         * 11 x 6 = 66
         * 12 x 6 = 72
         */
        function tafel($getal)
        {
            echo "<p>De tafel van $getal</p>";
            echo "***********";
            $getallen = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

            foreach ($getallen as $item) {
                $product = $item * $getal;
                echo "<p>$item x $getal = $product</p>";
            }

        }

        $test = range(3, 30);
        var_dump($test);

        tafel(3);
        tafel(5);
        tafel(50);

        
       

    ?>

    
</body>
</html>