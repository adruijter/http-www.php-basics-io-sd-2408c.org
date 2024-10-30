<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Proeftoets 2408*</title>
</head>
<body>
    <h3>Proeftoets</h3>
    
    <h5>Vraag 2</h5>
    <hr>

    <?php

    $noot = array(
        'Cashewnoten',
        'Paranoten',  
        'Hazelnoten',
        'Amandelen',
        'Walnoten'
    );

    $index = 1;
    foreach ($noot as $nootje) {
        echo "<p>$index. $nootje</p>";
        $index++;
    }

    echo "<hr>";

    echo "<ol>";
    foreach ($noot as $nootje) {
        echo "<li>$nootje</li>";
        $index++;
    }
    echo "</ol>";

    echo "<hr>";

    foreach ($noot as $index => $nootje) {
        echo "<p>" . $index + 1 . ". $nootje</p>";
    }
    ?>

    <h5>Vraag 3</h5>
    <hr>

    <?php
    $auto = array(
        'Mercedes' => 120000,
        'Kia' => 12000,
        'BMW' => 230000,
        'Audi' => 88000
    );

    $totaalBedrag = 0;
    foreach ($auto as $car => $price) {
        echo "<p>De $car kost $price</p>";
        $totaalBedrag += $price;
    }
    echo "Het totaalbedrag voor het wagenpark is: $totaalBedrag &euro;";
    ?>

    <h5>Vraag 4</h5>
    <hr>

    <?php
    function rekenen($getal1, $getal2, $bewerking)
    {
        if ($getal1 >= 0 && $getal2 >= 0 && is_int($getal1) && is_int($getal2)) {
            switch ($bewerking) {
                case '+':
                    $som = $getal1 + $getal2;
                    return "<p>De som van $getal1 + $getal2 = $som</p>";
                    break;
                case ':':
                    $deling = $getal1 / $getal2;
                    return "<p>De deling van $getal1 : $getal2 = $deling</p>";
                    break;
                case 'x':
                    $product = $getal1 * $getal2;
                    return "<p>Het product van $getal1 x $getal2 = $product</p>";
                    break;
                case 'macht':
                    $macht = $getal1 ** $getal2;
                    return "<p>$getal1 tot de macht $getal2 = $macht</p>";
                    break;
                default:
                    return "<p>Uw gekozen bewerking is niet bekend.</p>";
            }        
        } else {
            return "<p>Error! Geef gehele getallen op groter dan 0.</p>";
        }
    }

    echo rekenen(5, 3, '+');
    echo rekenen(10, 5, ':');
    echo rekenen(4, 5, 'x');
    echo rekenen(10, 3, 'macht');
    echo rekenen(10, 5, 'lksdjlskfjslkd');
    echo rekenen(1.5, 5, '+');
    echo rekenen(10, 3.3, '+');
    echo rekenen(-1, 5, '+');
    echo rekenen(1, -5, '+');
    ?>

    <h5>Vraag 5</h5>
    <hr>

    <?php
        function tafelVan($getal, $startGetal = 1, $eindGetal = 10)
        {
            if ( $startGetal < $eindGetal) {
                $index = $startGetal;
                while ($index <= $eindGetal) {
                    $product = $index * $getal;
                    echo "<p>$index x $getal = $product</p>";
                    $index++;
                }
            } else {
                echo "Het startgetal is groter dan het eindgetal, dit kan niet";
            }
        }

        echo tafelVan(5, 5, 15);
        echo tafelVan(9);
        echo tafelVan(9, 100, 10);
        echo tafelVan(4, 30, 33);

    ?>

    <h5>Vraag 6</h5>
    <hr>

    <?php
         function asciiArt() 
         {
             for ($i = 0; $i < 9; $i++) {
                 if ($i < 4) {
                     echo str_repeat("&nbsp;", $i) . "x" . str_repeat("&nbsp;", 7 - 2 * $i) . "x<br>";
                 }
                 if ($i == 5) {
                     echo str_repeat("&nbsp;", $i - 1) . "x<br>";
                 }
                 if ($i > 5) {
                     echo str_repeat("&nbsp;", 9 - $i) . "x" . str_repeat("&nbsp;", 2 * $i - 11) . "x<br>";
                 }
             }
         }
 
         asciiArt();
    ?>

    <h5>Vraag 7</h5>
    <hr>

    <?php

    function rechthoek($lengte, $breedte)
    {
        if ($lengte < $breedte) {
            return "<p>De lengte $lengte is kleiner dan de breedte $breedte, graag aanpassen!</p>";
        } elseif (!is_int($lengte) || !is_int($breedte)) {
            return "<p>$lengte of $breedte is geen geheel getal of ze zijn het beiden niet, graag aanpassen!</p>";
        } elseif ($lengte < 0 || $breedte < 0) {
            return "<p>$lengte of $breedte is kleiner dan nul, graag aanpassen</p>";
        }
        $oppervlakte = $lengte * $breedte;
        return "<p>De oppervlakte van een rechthoek van $lengte x $breedte = $oppervlakte</p>";
    }

    echo rechthoek(5, 4);
    echo rechthoek(3, 4);
    echo rechthoek(6.5, 4.2);
    echo rechthoek(-3, -8);
    echo rechthoek(3, 4.2);


    

    ?>

    <h5>Vraag 8</h5>
    <hr>

    <?php
    function optellen($getal1, $getal2) {
        if (!is_numeric($getal1) || !is_numeric($getal2)) {
            return "<p>Voer alstublieft geldige getallen in.</p>";
        }
        $som = $getal1 + $getal2;
        return "<p>De som van $getal1 + $getal2 = $som</p>";
    }

    // Voorbeelden van gebruik
    echo optellen(5, 3);
    echo optellen(10, 20);
    echo optellen("abc", 5); // Geeft foutmelding
    ?>

    
</body>
</html>