<?php

function chiffrementCesar($message)
{
    $cle = 1;

    $message = strtoupper($message);

    $messageChiffree = "";
    $taille = strlen($message);
    for ($i = 0; $i < $taille; $i++) {
        $lettre = ord($message[$i]);

        if ($lettre >= 65 && $lettre <= 90) {
            $lettre = ($lettre - 65 + $cle) % 26 + 65;
        }

        $messageChiffree .= chr($lettre);
    }

    return $messageChiffree;
}

var_dump(chiffrementCesar("Hello World !"));
