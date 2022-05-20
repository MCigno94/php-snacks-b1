<!-- 
    ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->

<?php

$class_a = 
    [
        [
            "firstName" => "Mattia",
            "lastName" => "Cigno",
            "votes" => [8, 3.5, 9, 6, 7.5]
        ],
        [
            "firstName" => "Marco",
            "lastName" => "Rossi",
            "votes" => [7, 8.5, 10, 5.5, 6]
        ],
        [
            "firstName" => "Giulia",
            "lastName" => "Verdi",
            "votes" => [10, 4.5, 8.5, 7, 8]
        ],
        [
            "firstName" => "Maria",
            "lastName" => "Novero",
            "votes" => [9.5, 7.5, 5, 8, 6]
        ],
    ];

    $students = [];
    
    for($i = 0; $i < count($class_a); $i++){
        $student = $class_a[$i];
        //var_dump($student);
        $firstName = $student["firstName"];
        $lastName = $student["lastName"];
        $votes = $student["votes"];
        $average = array_sum($votes) / count($votes);
        $students[] = $firstName . " " . $lastName . ", Media: " . $average;
    };
    var_dump($students);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SNAK-7</title>
    </head>
    <body>

    <h2>Studenti Classe A</h2>
    <?php for($i = 0; $i < count($class_a); $i++) { ?>
    <p>
        <?php 
        $student = $class_a[$i];
        //var_dump($student);
        $firstName = $student["firstName"];
        $lastName = $student["lastName"];
        $votes = $student["votes"];
        $average = array_sum($votes) / count($votes);
        echo $students[] = $firstName . " " . $lastName . ", Media: " . $average;
        ?>
    </p>
    <?php } ?>
        
    </body>
    </html>