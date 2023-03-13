<?php

function factorielle($nb)
{
    $compteur = 0;
    $result = 1;
    while ($compteur != $nb) {
        $compteur++;
        $result = $compteur * $result;
    }
    return $result;
}

var_dump(factorielle(5));
