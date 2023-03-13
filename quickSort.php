<?php
function quick_sort($tab)
{
    $loe = $gt = array();
    if (count($tab) < 2) {
        return $tab;
    }
    $pivot_key = key($tab);
    $pivot = array_shift($tab);
    foreach ($tab as $valeur) {
        if ($valeur <= $pivot) {
            $loe[] = $valeur;
        } elseif ($valeur > $pivot) {
            $gt[] = $valeur;
        }
    }
    return array_merge(quick_sort($loe), array($pivot_key => $pivot), quick_sort($gt));
}

$tableau = array(3, 0, 2, 5, -1, 4, 1);
echo 'Tableau de base : ' . implode(',', $tableau) . "\n";
$tableauTrier = quick_sort($tableau);
echo 'Tableau trier : ' . implode(',', $tableauTrier);
