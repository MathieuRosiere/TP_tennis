<?php
$jeuJ1 = 0;
$jeuJ2 = 0;

for ($jeu = 0; $jeuJ1 < 4 & $jeuJ2 < 4 & $jeuJ1 - $jeuJ2  ; $jeu++) {

    $scoreJ1 = rand(1, 10);
    $scoreJ2 = rand(1, 10);

    // Incrémentation des points pour gagner un jeu.
    if ($scoreJ1 > $scoreJ2) {
        $jeuJ1++;
        echo "J1 = $jeuJ1\n";
    } else {
        $jeuJ2++;
        echo "J2 = $jeuJ2\n";
    }

    // Une fois qu'un joueur atteint 4 il gagne un jeu.
    if ($jeuJ1 === 4) {
        echo "J1 win ($jeuJ1)";
    } elseif ($jeuJ2 === 4) {
        echo "J2 win ($jeuJ2)";
    } else {
        echo "jeu en cours [ $jeuJ1 - $jeuJ2 ]\n";
    }
}