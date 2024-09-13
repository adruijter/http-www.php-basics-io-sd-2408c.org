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

        //
        $ikBenMiljonair = 0;

        if ($ikBenMiljonair) {
            echo "Welkom miljonair u wordt doorgestuurd naar de porsche 9-11 site";
            header('refresh:3; url=https://www.porsche.com/netherlands/nl/models/911/');
        } else {
            echo "Ik ben nog geen miljonair";
            header('refresh:3; url=https://www.intertoys.nl/SearchDisplay?categoryId=&storeId=11601&catalogId=11051&langId=-1000&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=24&searchTerm=speelgoedauto&authToken=-1002%252CJdh5JVzqovGDGuZIS9A0yAc11LCiDPi1CWNOoTX%252B9xo%253D&_gl=1*fbis04*_up*MQ..*_ga*MjM2MzkzNTU4LjE3MjYyMzY1NDY.*_ga_GHTST6BQ99*MTcyNjIzNjU0NC4xLjAuMTcyNjIzNjU0NC4wLjAuODgxNjczNzI1');
        }




    ?>
</body>
</html>