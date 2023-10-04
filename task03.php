<?php

function get_shortest(array $strings)
{
    $shortest = $strings[0];
    foreach ($strings as $longueur) {
        if (strlen($longueur) < strlen($shortest)) {
            $shortest = $longueur;
        }
    }
    return $shortest;
}
