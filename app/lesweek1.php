<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>PHP Basics</title>
</head>
<body>
    <h1>Tekst op scherm zetten met PHP</h1>

    <!-- Dit is HTML commentaar-->

    <?php
       // Dit is een variabele voor de voornaam 
       $voornaam = "Arjan";
       
       # Dit is een variabele voor de tussenvoegsel
       $tussenvoegsel = "de";
       
       /* Dit is
          commentaar op
          meerdere regels*/
       $achternaam = "Ruijter";

       /**
        * Dit is een docblock comment wat veel
        * gebruikt wordt bij functies.
        * Dit zullen we later tegenkomen
        */
       $straatnaam = "Julianastraat";

       $huisnummer = "6HS";

       $woonplaats = "Amsterdam";

       $naamVader = 'Frans';

       echo "<div>";
             
       echo "<p>Mijn naam is $voornaam $tussenvoegsel $achternaam</p>"; 

       /* Hieronder staat een voorbeeld van hoe je een string in stukjes kunt knippen en weer
          aan elkaar kunt plakken*/

       // echo '<p>Mijn naam is ' . $voornaam . ' ' .$tussenvoegsel . ' ' . $achternaam . '</p>';
       
       echo "<p>Ik woon in de $straatnaam op huisnummer $huisnummer te $woonplaats </p>";

       echo "</div>";


       
       echo "<div>";
       echo "De naam van mijn vader is: $naamVader";
       echo "</div>";
    ?>

    <a href="../index.html">terug</a>
</body>
</html>