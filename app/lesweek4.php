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


        /**
         * While - loop is een loop die een aantal malen doorlopen wordt
         * 
         */

        $number = 0;
        While ($number < 5) {
           echo "<p>$number</p>";
           $number++; 
        }

        /**
         * Maak een indexed array met de naam groenten en zet daar
         * 5 groentensoorten in. Geef deze groentesoorten weer op 
         * het scherm. Gebruik daarvoor een While - loop
         * Tip: $groenten[0] geeft de eerste groente in het array weer
         */
        //                     0          1            2            3             4              5          6
         $groenten = array('Wortel', 'Aubergine', 'Courgette', 'Bloemkool', 'Sperciebonen', 'Aardappel', 'Pompoen');

         echo "<p>$groenten[1]</p>";


         $index = 0;
         while ($index < count($groenten)) {
            echo "<p>$groenten[$index]</p>";
            $index++;
         }

         /**
          * Herschrijf de bovenstaande code zodat Aardappel eerste wordt genoemd en als 
          * laatste wortel. Dus geef het array weer in omgekeerde volgorde. Gebruik een 
          * while - loop
          * Output:
          * Aardappel
          * Sperciebone
          *....
          * Wortel
          */

         $index = count($groenten) - 1;
         while ($index >= 0) {
            echo "<p>$groenten[$index]</p>";
            $index--;
         }


        /**
         * De do-While loop wordt altijd minimaal een maal uitgevoerd.
         */

        $index = 11;
        do {
            echo "<p>$index</p>";
            $index++;
        } while ($index <= 10);

        /**
         * Maak met een do-while een lijstje met het kopje
         * Top 7 gezonde groenten
         * **********************
         * Het kopje moet ook verschijnen als de index buiten het bereik valt van de loop
         */

        $index = 0;
        do {
            if ($index == 0) {
                echo "<p>Top 7 gezonde groenten</p>";
                echo "*******************";
            }
            echo "<p>$groenten[$index]</p>";
            $index++;
        } while ($index < count($groenten));



        /**
         * De for-loop
         */
        for ($i = 0; $i < 7; $i++) {
            echo "<p>$i</p>";
        }
        /**
         * Maak een indexed array $fruit met 5 waarden en zet de waarden van het fruit 
         * onder elkaar op het scherm.
         * gebruik een for-loop
         */
        
        $fruit = array('Appel', 'Banaan', 'Aardbei', 'Peer', 'Druiven');

        for ($i = 0; $i < count($fruit);$i++) {
            echo "<p>$fruit[$i]</p>";
        }

        /**
         * Maak een functie die checked of een fruitsoort in het 
         * array zit en de zin teruggeeft dat het fruitsoort in het
         * array zit. Als het fruitsoort er niet in zit dan krijg
         * je de melding: Fruitsoort is onbekend
         * 
         * Voorbeelden
         * fruitChecker('Appel'); //Output: De fruitsoort appel zit in het array
         * fruitChecker('Kersen'); // Output: De fruitsoort kersen is onbekend
         * 
         * Je hebt nodig een if-else controlestructuur, in_array() en een functie
         * 
         */

         function fruitChecker($fruitItem) {
            $fruit = array('Appel', 'Banaan', 'Aardbei', 'Peer', 'Druiven');

            if (in_array($fruitItem, $fruit)) {
                return "<p>De fruitsoort $fruitItem zit in het array</p>";
            } else {
                return "<p>De fruitsoort $fruitItem is onbekend</p>";
            }
         } 

         echo fruitChecker('Aardbei');
         echo fruitChecker('Kersen');


         /**
          * Maak deze functie nu zelf met een for-loop
          */

         function fruitChecker_v2($fruitItem) {
            $fruit = array('Appel', 'Banaan', 'Aardbei', 'Peer', 'Druiven');

            // Gebruik een for-loop
            for ($i = 0; $i < count($fruit); $i++) {
                if ($fruitItem == $fruit[$i]) {
                    return "<p>De fruitsoort $fruitItem zit in het array</p>";
                }                
            } 
            return "<p>De fruitsoort $fruitItem is onbekend</p>"; 
        }

         echo fruitChecker_v2('Aardbei');
         echo fruitChecker_v2('Kersen');

        
        /**
         * Met foreach kun je makkelijke een associatief array uitlezen
         */
        $cijfers = array(
            'Nederlands' => 6.7,
            'Engels' => 8.3,
            'Rekenen' => 9.2
        );

        foreach ($cijfers as $vak => $cijfer) {
            echo "<p>Vak: $vak => Cijfer: $cijfer</p>";
        }



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
