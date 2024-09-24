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

        function berekenSom() 
        {
            
        }

    ?>
    
</body>
</html>