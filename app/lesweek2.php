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


    ?>
</body>
</html>