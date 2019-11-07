<?php

$list = [2, 9, 5, 7, 8];  //Ici, il n'y a qu'une liste faite en dur, mais devrait être adaptable avec le fichier.

$max = 0;

//Dans la première partie du foreach, on convertit les valeurs lettres en valeur chiffrée.
//Ensuite, on balaie chaque possibilité

foreach($list as $a)
{
    if($a == 'A')
    {
        $max = 14;
    }
    
    elseif($a == 'K')
    {
        if(13 >= $max)
        {
            $max = 13;
        }
    }
    
    elseif($a == 'Q')
    {
        if(12 >= $max)
        {
            $max = 12;
        }
    }

    elseif($a == 'J')
    {
        if(11 >= $max)
        {
            $max = 11;
        }
    }

    elseif($a == 'T')
    {
        if(10 >= $max)
        {
            $max = 10;
        }
    }

    else
    {
        if(9 >= $max)
        {
            $max = 9;
        }

        if(8 >= $max)
        {
            $max = 8;
        }

        if(7 >= $max)
        {
            $max = 7;
        }

        if(6 >= $max)
        {
            $max = 6;
        }

        if(5 >= $max)
        {
            $max = 5;
        }

        if(4 >= $max)
        {
            $max = 4;
        }

        if(3 >= $max)
        {
            $max = 3;
        }

        if(2 >= $max)
        {
            $max = 2;
        }
    }

}

//return $max;
echo "La carte la plus haute est ". $max;

?>
