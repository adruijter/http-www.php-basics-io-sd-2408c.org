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
    <h3>Controlestructuren met PHP</h3>

    <?php 
        /**
         * Met een if-else controlestructuur kunnen we keuzes maken
         * in onze programma
         */

        $waarOfNiet = false;

        if ($waarOfNiet) {
            echo "<p>Het is waar</p>";
        } else {
            echo "<p>Het is niet waar</p>";
        }

        /**
         * Gebruik een if-else controlestructuur om de volgende tekst
         * op het scherm te zetten
         * 
         * $mooiWeerOfNiet = "Mooi Weer"; //Output: Het is mooi weer vandaag
         * 
         * Maak een nieuwe elseif voor "Koud Weer"
         */
        $mooiWeerOfNiet = "Mooi Weer";

        if ($mooiWeerOfNiet == 'Mooi Weer') {
            echo "<p>Het is mooi weer vandaag</p>";
        } elseif ($mooiWeerOfNiet == "Slecht Weer") {
            echo "<p>Het is slecht weer vandaag</p>";
        } elseif ($mooiWeerOfNiet == "Koud Weer") {
            echo "<p>Het is koud weer vandaag</p>";
        } else {
            echo "<p>Het weer is onbekend vandaag</p>";
        }

        /**
         * Maak 3 indexed arrays genaamd io_sd_2408a, io_sd_2408b en io_sd_2408c
         * Elk array bevat 3 voornamen
         * Maak een functie die checked in welk van de drie klassen een student 
         * zit.
         * De functie neemt een voornaam als argument aan (verplicht) 
         * gebruik de php-functie in_array()
         * 
         * klasZoeker('Arjan') // Output: Arjan zit in klas IO-SD-2408A
         */

         function klasZoeker($naam) {
            $io_sd_2408a = array('Arjan', 'Bert', 'Leo');
            $io_sd_2408b = array('Frans', 'Johan', 'Mark');
            $io_sd_2408c = array('Chris', 'Dirk', 'Gerard');
    
            if (in_array($naam, $io_sd_2408a)) {
                return "<p>$naam zit in klas IO-SD-2408A</p>";
            } elseif (in_array($naam, $io_sd_2408b)) {
                return "<p>$naam zit in klas IO-SD-2408B</p>";
            } elseif (in_array($naam, $io_sd_2408c)) {
                return "<p>$naam zit in klas IO-SD-2408C</p>";
            } else {
                return "<p>$naam zit niet op deze school</p>";
            }
         }

         echo klasZoeker('Arjan'); //Output: Arjan zit in klas IO-SD-2408A
         echo klasZoeker('Johan'); //Output: Johan zit in klas IO-SD-2408B
         echo klasZoeker('Dirk'); //Output: Dirk zit in klas IO-SD-2408C
         echo klasZoeker('Lea'); //Output: Frans zit niet op school
         
         /**
          * Maak een functie getalChecker($getal) die checked of
          * een getal groter, kleiner of gelijk is aan 10 
          * Alleen getallen worden gechecked geen andere datatypen
          * dan is de output: U heeft iets anders dan een getal gegeven
          * gebruik if-elseif-else
          */

          function getalChecker($getal) 
          {
            if (is_numeric($getal)) {
                if ($getal == 10) {
                    return "<p>Het getal $getal is gelijk aan 10</p>";
                } elseif ($getal < 10) {
                    return "<p>Het getal $getal is kleiner dan 10</p>";
                } elseif ($getal > 10) {
                    return "<p>Het getal $getal is groter dan 10</p>";
                }
            } elseif (is_string($getal)) {
                return "<p>Error u heeft een string ingevoerd</p>";
            } else {
                return "U heeft een datatype meegeven dat niet werkt";
            }
          }

          echo getalChecker(12); 
          echo getalChecker(10); 
          echo getalChecker(2); 
          echo getalChecker('tien'); 


          /**
           * switch-case
           * Maak dit af voor avond en nacht
           */

           $deelVanDeDag = 'middag';

           switch ($deelVanDeDag) {
                case 'ochtend':
                    echo "<p>Goedemorgen het is ochtend</p>";
                    break;
                case 'middag':
                    echo "<p>Goedemiddag het is middag</p>";
                    break;
                case 'avond':
                    echo "<p>Goedenavond het is avond</p>";
                    break;
                case 'nacht':
                    echo "<p>Goedennacht slaap lekker</p>";
                    break;
                default:
                    echo "<p>Het is onbekend welk deel van de dag het is</p>";
           }


        /**
         * Maak een functie diplomaChecker($opleiding) met daarin een
         * switch-case controlestructuur die aangeeft welke opleiding 
         * je hebt gehaald. De keuze is:
         * VWO, HAVO, VMBO TL, VMBO gemengd, VMBO Kader, VMBO Basis
         * Als de opleiding er niet bijzit dan is de output:
         * Uw opleiding is niet bekent.
         * 
         * echo diplomaChecker('VMBO TL'); //Output: Ik heb mijn diploma VMBO TL behaald.
         * echo diplomaCHecker('basisschool'); // Uw opleiding is niet bekent
         */

         function diplomaChecker($opleiding) 
         {  
            switch ($opleiding) {
                case 'VWO':
                    return "<p>Ik heb mijn VWO diploma behaald</p>";
                    break;
                case 'HAVO':
                    return "<p>Ik heb mijn HAVO diploma behaald</p>";
                    break;
                case 'VMBO TL':
                    return "<p>Ik heb mijn VMBO TL diploma behaald</p>";
                    break;
                case 'VMBO Gemengd':
                    return "<p>Ik heb mijn VMBO Gemengd diploma behaald</p>";
                    break;
                case 'VMBO Kader':
                    return "<p>Ik heb mijn VMBO Kader diploma behaald</p>";
                    break;                    
                case 'VMBO Basis':
                    return "<p>Ik heb mijn VMBO Basis diploma behaald</p>";
                    break;
                case 'Praktijkonderwijs':
                    return "<p>Ik heb mijn Praktijkonderwijs diploma behaald</p>";
                    break;
                default:
                    return "<p>Uw opleiding is niet bekent</p>";
            }
         }

         echo diplomaChecker('VWO');
         echo diplomaChecker('VMBO TL');
         echo diplomaChecker('VMBO Gemengd');
         echo diplomaChecker('VMBO Kader');
         echo diplomaChecker('VMBO Basis');
         echo diplomaChecker('Praktijkonderwijs');
         echo diplomaChecker('HAVO');
         echo diplomaChecker('LOI');

         

        // Check of er op de submit knop gedrukt is
        if (isset($_POST['submit'])) {
            // Roep de functie diplomaChecker aan met het geselecteerde schooltype
            echo diplomaChecker($_POST['schooltype']);
        }


        echo "<hr>";


        




    ?>

    <!-- Dit is een html formulier -->
    <form action="lesweek4.php" method="post">
        <select name="schooltype">
            <option value="">--Geef een schooltype op--</option>
            <option value="VWO">VWO</option>
            <option value="VMBO TL">VMBO TL</option>
            <option value="VMBO Kader">VMBO Kader</option>
            <option value="VMBO Basis">VMBO Basis</option>
            <option value="Praktijkonderwijs">Praktijkonderwijs</option>
            <option value="HAVO">HAVO</option>
            <option value="LOI">LOI</option>
        </select>
        <input type="submit" name="submit" value="Verstuur">
    </form>

</body>
</html>
