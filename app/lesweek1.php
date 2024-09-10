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

    <?php
       $voornaam = "Arjan";
       
       $tussenvoegsel = "de";
       
       $achternaam = "Ruijter";

       $straatnaam = "Julianastraat";

       $huisnummer = "6HS";

       $woonplaats = "Amsterdam";

       echo "<div>";
             
       echo "<p>Mijn naam is $voornaam $tussenvoegsel $achternaam</p>"; 

       echo '<p>Mijn naam is ' . $voornaam . ' ' .$tussenvoegsel . ' ' . $achternaam . '</p>';
       
       echo "<p>Ik woon in de $straatnaam op huisnummer $huisnummer te $woonplaats </p>";

       echo "</div>";
    ?>

    <a href="../index.html">terug</a>
</body>
</html>