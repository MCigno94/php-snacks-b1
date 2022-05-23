<!-- 
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
-->

<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

var_dump("nome: " . $name . "; mail: " . $mail . "; età: " . $age);
var_dump(strlen($name));

if (strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@") && is_numeric($age)) {
    var_dump("accesso verificato");
    echo "<h2>Accesso Verificato</h2>";
} else {
    var_dump("accesso negato");
    echo "<h2>Accesso Negato</h2>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>accesso</h1>

    <?php if (strlen($name) > 3 && strpos($mail, ".") && is_numeric($age)) : ?>
        <h3>Accesso Verificato </h3>
    <?php else : ?>
        <h3>Accesso negato</h3>
    <?php endif; ?>
    
</body>
</html>