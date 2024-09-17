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




       



    ?>

</body>
</html>