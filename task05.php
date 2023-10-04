<?php

function calc_average(array $numbers)
{
    $somme = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $somme += $numbers[$i];
    }
    $moyenne = $somme / count($numbers);
    return round($moyenne, 1);
}
