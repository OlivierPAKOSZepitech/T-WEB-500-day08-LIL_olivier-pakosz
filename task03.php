<?php

function get_shortest(array $strings)
{
    $shortest = $strings[0];
    foreach ($strings as $longueur) {
        if (count($longueur) < count($shortest)) {
            $shortest = $longueur;
        }
    }
    return $shortest;
}
