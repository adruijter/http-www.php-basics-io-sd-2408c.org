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
         * Pas de functie tafel aan zodat je zelf een start- en stopwaarde en stapgrootte kunt meegeven aan de functie
         * dus bij de aanroep van de functie: Gebruik de functie range() daarvoor, zie:
         * https://www.w3schools.com/php/func_array_range.asp
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
        function tafel($getal, $start = 1, $eind = 10, $stap = 1)
        {
            echo "<p>De tafel van $getal</p>";
            echo "***********";
            $getallen = range($start, $eind, $stap);

            foreach ($getallen as $item) {
                $product = $item * $getal;
                echo "<p>$item x $getal = $product</p>";
            }

        }

        tafel(3);
        tafel(5);
        tafel(50);
        tafel(6, 10, 20, 2);


        /**
         * Maak een functie die controleert of een automerk in een array zit
         * De functie krijgt een array mee met 10 automerken en een automerk. Als het automerk
         * in het array zit krijg je de melding "De auto is aanwezig". Wanneer 
         * het automerk niet in het array zit krijg je de melding "De auto is niet aanwezig"
         * 
         * $autos = ['Mercedes', 'Audi']
         * 
         * Gebruik het voorbeeld van W3schools.com: 
         * https://www.w3schools.com/php/func_array_in_array.asp
         * 
         * merkAutoAanwezig($autos, 'Volkswagen');
         * 
         * Output:
         * Het merk Volkswagen is niet aanwezig.
         */

        $autos = array(
            'BMW',
            'Mercedes',
            'Opel',
            'Tesla',
            'Lada',
            'Ferarri',
            'Bentley',
            'Aston Martin',
            'Volkswagen',
            'Ford'
        );

        $autoMerk = 'Toyota';

        function merkAutoAanwezig($autos, $autoMerk) 
        {
            if (in_array($autoMerk, $autos)) {
                return "<p>Het automerk $autoMerk is aanwezig</p>";
            } else {
                return "<p>Het automerk $autoMerk is niet aanwezig</p>";
            }
        }

        echo merkAutoAanwezig($autos, $autoMerk);


        /**
         * Maak een functie die een array kan sorteren. Oplopend of aflopend. bijvoorbeeld
         * Laat je inspireren door: https://www.w3schools.com/php/php_ref_array.asp
         * 
         * $salaris = array(2300, 1200, 4000, 1380);
         * 
         * sorteer($salaris, 'aflopend');
         * 
         * output
         * Salarissen
         * **********
         * 4000
         * 2300
         * 1380
         * 1200
         * 
         * sorteer($salaris, 'oplopend');
         * 
         * output
         * Salarissen
         * **********
         * 1200
         * 1380
         * 2300
         * 4000
         */

         $salaris = array(2300, 1200, 4000, 1380);

         function sorteer($salaris, $sorteervolgorde)
         {
            if ($sorteervolgorde == 'oplopend') {
                $sortedArray = ksort($salaris);
            } else if ($sorteervolgorde == 'aflopend') {
                $sortedArray = krsort($salaris);
            }
            foreach ($sortedArray as $value) {
                echo "<p>$item</p>";
            }
         }

         sorteer($salaris, 'aflopend');



        
       

    ?>

    
</body>
</html>