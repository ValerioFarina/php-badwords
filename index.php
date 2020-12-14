<?php
    $paragraph = "Pippo (Goofy, in precedenza Dippy Dawg e Dippy the Goof) è un personaggio immaginario dei cartoni animati e dei fumetti della Disney, ideato nel 1932 da Pinto Colvig e dall'animatore Johnny Cannon come comprimario di Topolino in un cortometraggio, ma viene caratterizzato definitivamente dall'animatore Art Babbitt nel 1935 e parallelamente esordisce nei fumetti realizzati da Floyd Gottfredson che definisce ulteriormente il personaggio dandogli spessore come spalla principale di Topolino. È apparso in centinaia di cartoni animati come protagonista o comprimario e in migliaia di albi a fumetti realizzati in vari paesi del mondo.";
    $paragraph_length = strlen($paragraph);
    $censored_word = $_GET["badword"];
    $censorship = "***";
    $censored_paragraph = str_replace($censored_word, $censorship, $paragraph);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Bad Words</title>
    </head>
    <body>
        <p>
            <?php
                echo $censored_paragraph;
            ?>
        </p>
        <h1>
            <?php
                echo "Uncensored paragraph's length: " . $paragraph_length;
            ?>
        </h1>
    </body>
</html>
