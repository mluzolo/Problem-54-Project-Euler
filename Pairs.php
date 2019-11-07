<?php

$list = [2, 2, 7, "T", "T"];

$pairs = array_count_values($list); //passe le tableau en revue et compte le nombre d'itérations.

$a = array_values($pairs); //permet de limiter les valeurs à exploiter à 2 ou 1

$nbPairs = 0;

//Ensuite, avec le foreach, on calcule le nombre de 2, donc de paires, que contient le tableau.
//Pour une valeur de 2, on incrémente la variable nbPairs. Sinon, nbPairs ne bouge pas.

foreach($a as $x)
{
    if($x == 2)
    {
        $nbPairs++;
    }

    if($x != 2)
    {
        $nbPairs = $nbPairs;
    }
}

print_r($pairs);
print_r($a);
print_r("Il y a " . $nbPairs . " paire(s) dans cette main.");


//return $nbPairs;
//echo $nbPairs;

?>
