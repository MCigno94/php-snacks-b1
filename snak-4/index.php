<!-- 
    ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->

 <?php

 $array_random_numbers = [];

 for ($i = 0; count($array_random_numbers) < 15; $i++ ) {
    $number = rand(1, 100);
    if (! in_array($number, $array_random_numbers)) {
        $array_random_numbers[] = $number;
    }
}
var_dump($array_random_numbers);