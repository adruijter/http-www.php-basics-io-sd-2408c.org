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
    <h3>Datatypen met PHP</h3>

    <?php
        // Dit is een string variabele
        $schoolnaam = 'MBO Utrecht';
        echo "<p>Ik zit op de school $schoolnaam</p>";
        echo '<p>Ik zit op de school $schoolnaam</p>';

        // Dit is een integer variabele
        $aantalStudenten = 467;
        echo "<p>Op $schoolnaam zitten $aantalStudenten studenten</p>";

        // Je kunt de waarde van twee variabelen optellen
        $stijgingStudenten = 200;
        $totaalAantalStudenten = $aantalStudenten + $stijgingStudenten;
        echo "<p>Het aantal studenten is de laatste 2 jaar met $stijgingStudenten gestegen tot " . $aantalStudenten + $stijgingStudenten . "</p>";
        echo "<p>Het aantal studenten is de laatste 2 jaar met $stijgingStudenten gestegen tot $totaalAantalStudenten</p>";

        // Je kunt de waarde van twee variabelen van elkaar aftrekken
        $dalingAantalStudenten = 200;
        $totaalAantalStudenten = $totaalAantalStudenten - $dalingAantalStudenten;
        // $totaalAantalStudenten -= $dalingAantalStudenten;
        echo "<p>De komende 2 jaar zal het aantal studenten dalen met $dalingAantalStudenten tot een totaal van $totaalAantalStudenten</p>";

        // Je de waarde van twee variabelen ook met elkaar vermenigvuldigen *
        $verdrievoudiging = 3;
        $totaalAantalStudenten = $totaalAantalStudenten * $verdrievoudiging;
        // $totaalAantalStudenten *= $verdrievoudiging; 
        echo "<p>De komende 4 jaar zal het studentenaantal verdrievoudigen naar $totaalAantalStudenten</p>";

        // Je kunt ook delen
        $halvering = 2;
        $totaalAantalStudenten = $totaalAantalStudenten / $halvering;
        // $totaalAantalStudenten /= $halvering;
        echo "<p>We gaan de helft van de studenten uitschrijven en dan zijn er nog $totaalAantalStudenten over</p>";

        // Hieronder staat een Boolean variabele
        $ingeschrevenBijMboUtrecht = true;

        if ($ingeschrevenBijMboUtrecht) {
            echo "<p>Ik ben een ingeschreven studenten van MBO Utrecht</p>"; //op het scherm te zien bij true
        } else {
            echo "<p>Ik ben niet ingeschreven bij MBO Utrecht<p>"; //op het scherm te zien bij false
        }

        
        $ikBenMiljonair = true;

        if ($ikBenMiljonair) {
            echo "<p>Welkom miljonair u wordt doorgestuurd naar de porsche 9-11 site</p>";
            // header('refresh:6; url=https://www.porsche.com/netherlands/nl/models/911/');
        } else {
            echo "<p>Ik ben nog geen miljonair</p>";
            // header('refresh:6; url=https://www.intertoys.nl/');
        }


        // Wanneer je meerdere waarden aan één variabele koppelt heb je een array nodig
        //                  0          1      2         3          4        5          6
        $snoep = array('Snickers', 'Mars', 'Twix', 'Milky Way', "M&M's", 'Bounty', 'Nuts');
        echo "<p>Mijn favoriete snoep is: $snoep[0]</p>";
        echo "<p>Mijn favoriete snoep is: $snoep[1]</p>";
        echo "<p>Mijn favoriete snoep is: $snoep[2]</p>";
        echo "<p>Mijn favoriete snoep is: $snoep[3]</p>";
        echo "<p>Mijn favoriete snoep is: $snoep[4]</p>";
        echo "<p>Mijn favoriete snoep is: $snoep[5]</p>";
        echo "<p>Mijn favoriete snoep is: $snoep[6]</p>";

        foreach ( $snoep as $item) {
            echo "<p>Mijn favoriet snoep is: $item</p>";
        }

        /* Maak een array met daarin 10 games die je leuk en zet deze games 
            in een top tien lijstje met een foreach-loop */

        $games = array(
                    'Kings Valley', 
                    'Redux of Time', 
                    'First Principle', 
                    'Dr. Dr.', 
                    'The legend II', 
                    'Star Wars', 
                    'Day of independents',
                    'Last Emperor',
                    'Take two',
                    'Enter the Dragon'
                 );
        // var_dump($games);

        echo "<p>Mijn top tien lijst van games</p>";
        echo "<p>==================</p>";

        echo "<ol>";
        foreach ($games as $item) {
            echo "<li>$item</li>";
        }
        echo "</ol>";


        /**
         * Er zijn ook associatieve array's. Geef de onderstaande info weer
         * met een foreach-loop 
         */

        $persoon = array(
            'voornaam' => 'Arjan',
            'tussenvoegsel' => 'de', 
            'achternaam' =>'Ruijter'
        );
        echo "<p>Mijn voornaam is: {$persoon['voornaam']}</p>";


        foreach ($persoon as $key => $value)  {
            echo "<p>$key: $value</p>";
        }


         /**
         * Maak een associatief array met daarin je 8 favoriete sneakers inclusief prijs.
         * Gebruik een foreach-loop en de output moet er als volgt uitzien:
         * 
         * Mijn favoriete sneakers
         * ***********************
         * Schoen 1: Adidas - 231,45 euro
         * Schoen 2: ......
         * enz.....
         * Schoen 8: Nike - 187,67 euro
         */

         $sneakers = array(
            'Nike' => '231',
            'Adidas' => '245',
            'Vans' => '234',
            'Reebok' => '221',
            'Sketchers' => '232',
            'Le Coq Sportive' => '453',
            'Asics' => '342',
            'All Stars' => '124'
         );

         arsort($sneakers);

         echo "<p>Mijn favoriete Sneakers</p>";
         echo "*******************";

         $number = 1;
         foreach ($sneakers as $shoes => $price) {
            echo "<p>Schoen $number: $shoes - $price</p>";
            // $number = $number + 1;
            $number++;
            // $number+=1;
         }

         echo "<p>In het het array sneakers zitten in 
                totaal " . count($sneakers) . " schoenen met 
                    een totaalprijs van: " . array_sum($sneakers) . "&euro;</p>";

        /**
         * Maak een associatief array met daarin de top 5 snelste auto's ter wereld met
         * de topsnelheid daarin vermeld.Je moet sorteren op naam van de auto alfabetisch 
         * van a naar z dit moet gebeuren met een array sorteer functie. 
         * De output ziet er als volgt uit:
         * 
         * ====================================
         * Top 5 snelste sportauto's ter wereld
         * ====================================
         * 1. Bugatti Veyron => 456 km/h 
         * 2. Fiat Diablo    => 234 km/h
         * 3. ...........
         * 
         */

         $fastestCars = array(
            'Bugatti Chiron Super Sport 300+' => '490',
            'SSC Tuatara' => '475',           
            'Hennessey Venom F5' => '437',
            'Koenigsegg Jesko Absolut' => '531',
            'Rimec Nevera' => '415'
          );

         ksort($fastestCars); 

         echo "===================";
         echo "<p>Top 5 snelste auto's ter wereld</p>";
         echo "===================";

         $getal = 1;
         foreach ($fastestCars as $carname => $speed) {
            echo "<p>$getal. $carname => $speed km/u</p>";
            $getal++;
         }


       



    ?>

</body>
</html>