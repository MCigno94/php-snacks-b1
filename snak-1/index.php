<!-- 
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

 -->

<?php

// Creo array con la lista delle partite del campionato
$match_schedule = [
    [
        "squadra_di_casa" => "Cantu",
        "punti_casa" => 100,
        "squadra_ospite" => "Milano",
        "punti_ospite" => 90
    ],
    [
        "squadra_di_casa" => "Pesaro",
        "punti_casa" => 97,
        "squadra_ospite" => "Trieste",
        "punti_ospite" => 88
    ],
    [
        "squadra_di_casa" => "Sassari",
        "punti_casa" => 75,
        "squadra_ospite" => "Tortona",
        "punti_ospite" => 81
    ],
];
$match_results = [""];

#var_dump($match_schedule);

# ciclo l'array per selezionare i singoli valori
for ($i = 0; $i < count($match_schedule); $i++) {
    # creo una variabile per salvare il singolo array contenuto
    $single_match = $match_schedule[$i];
    # salvo il nome della squadra di casa e il punteggio
    $home_team = $single_match['squadra_di_casa'];
    $home_team_score = $single_match['punti_casa'];
    # salvo il nome della squadra ospite e il punteggio
    $visiting_team = $single_match['squadra_ospite'];
    $visiting_team_score = $single_match['punti_ospite'];
    //var_dump($home_team);
    //var_dump(array_search("squadra_di_casa", $single_match));
    $match = $home_team . " - " . $visiting_team . " | " . $home_team_score . " - " . $visiting_team_score;
    //var_dump($match);
    $match_results[] = $match;
}
var_dump($match_results);