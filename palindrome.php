<?php

function isPalindrome($word)
{
    $word = strtolower($word);
    $wordPalin = [];
    $palindrome = "";
    for ($i = 0; $i < strlen($word); $i++) {
        $wordPalin[$i] = $word[strlen($word) - 1 - $i];
        $palindrome = substr_replace($palindrome, $wordPalin[$i], $i, 0);;
    }
    if ($word == $palindrome) {
        return true;
    } else {
        return false;
    }
}


var_dump(isPalindrome('radar'));
var_dump(isPalindrome('KAYAK'));
var_dump(isPalindrome('Bonjour'));
