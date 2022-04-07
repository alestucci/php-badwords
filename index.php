<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bad Words</title>
</head>
<body>
    <?php
        $paragrafo = 'Il cammino dell’uomo timorato è minacciato da ogni parte dalle iniquità degli esseri egoisti e dalla tirannia degli uomini malvagi. Benedetto sia colui che nel nome della carità e della buona volontà conduce i deboli attraverso la valle delle tenebre perchè egli è in verità il pastore di suo fratello e il ricercatore dei figli smarriti. E la mia giustizia calerà sopra di loro con grandissima vendetta e furiosissimo sdegno, su coloro che proveranno ad ammorbare ed infine a distruggere i miei fratelli. E tu saprai che il mio nome è quello del Signore quando farò calare la mia vendetta sopra di te. Ezechiele 25:17';
        
    ?>
    
    <div class="container">
        <p><?php echo $paragrafo; ?></p>
        <h3>Numero di parole: <?=count(explode(" ", $paragrafo))?></h3>
        <h1>Filtrato con badword</h1>
        <p><?php echo str_replace(mb_convert_case($_GET["badword"], MB_CASE_LOWER), "***", mb_convert_case($paragrafo, MB_CASE_LOWER)); ?></p>
    </div>

</body>
</html>