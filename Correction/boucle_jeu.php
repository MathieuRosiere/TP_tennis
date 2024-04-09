<?php

// TODO : rajouter une boucle FOR pour simuler un match (plusieurs sets)

$jeu_joueur1 = 0;
$jeu_joueur2 = 0;

$set_joueur1 = 0;
$set_joueur2 = 0;

// Boucle FOR pour simuler des jeux jusqu'à ce qu'un joueur remporte un set ( 6 jeux )
for ($set = 0; $set_joueur1 < 6 & $set_joueur2 < 6; $set++) {

    // Remise à zero des valeurs quand un jeu est validé.
    $jeu_joueur1 = 0;
    $jeu_joueur2 = 0;

    // Boucle FOR pour simuler des echanges jusqu'à ce qu'un joueur atteigne un score = 4 et valide un jeu.
    for ($jeu = 0; $jeu_joueur1 < 4 & $jeu_joueur2 < 4; $jeu++) {

        // Génération de scores aléatoires pour savoir quel joueur gagne l'échange. 
        $score_joueur1 = rand(1, 10);
        $score_joueur2 = rand(1, 10);

        // Incrémentation des points pour gagner un jeu.
        if ($score_joueur1 === $score_joueur2) {
            continue;
        } elseif ($score_joueur1 > $score_joueur2) {
            $jeu_joueur1++;
        } else {
            $jeu_joueur2++;
        }

        // Une fois qu'un joueur atteint 4 il gagne un jeu.
        if ($jeu_joueur1 === 4) {
            $set_joueur1++;
            echo "Score : [ $jeu_joueur1 - $jeu_joueur2 ]\n" . PHP_EOL;
            echo "Jeu - Joueur 1 !\n" . PHP_EOL;
        } elseif ($jeu_joueur2 === 4) {
            $set_joueur2++;
            echo "Score : [ $jeu_joueur1 - $jeu_joueur2 ]\n" . PHP_EOL;
            echo "Jeu - Joueur 2 !\n" . PHP_EOL;
        } else {
            echo "Score : [ $jeu_joueur1 - $jeu_joueur2 ]\n";
        }
    }
    if ($set_joueur1 === 6) {
        echo "Joueur 1 remporte le set !\n";
    } elseif ($set_joueur2 === 6) {
        echo "Joueur 2 remporte le set !\n";
    }
}
