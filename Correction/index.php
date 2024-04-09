<?php
require_once('./Joueur.php');
require_once ('TennisMatch.php');
require_once ('Tournoi.php');


/*function mainMenu() {
    echo "
    Quelle action souhaitez vous effectuer ?\n
    [1] - Ajouter un nouveau joueur.
    [2] - Modifier un joueur.
    [3] - Supprimer un joueur.
    [4] - Afficher la liste des joueurs.
    [5] - Créer un match entre deux joueurs.
    [6] - Afficher la liste des matchs.\n
     ";

     $userChoice = (int)readline("Entrez le numéro de l'action : ");

    switch ($userChoice) {
        case 1: echo " choice 1";
            break;
        case 2: echo "choice 2";
            break;
        default: echo "no choice";
    }
}
*/


$joueur1 = new Joueur("Roddick", "Andy");
$joueur2 = new Joueur("Lecoeuvre", "Benoit");
$match = new TennisMatch($joueur1, $joueur2);
$match->jouerMatch();
$match->getVainqueur();

//Tournoi::ajouterJoueur($joueur1);
//Tournoi::ajouterJoueur($joueur2);

//Tournoi::getJoueurs();

//$index = (int)readline("Veuillez taper le numéro du joueur");
//$joueur = Tournoi::getJoueur($index);
//
//Tournoi::modifierJoueur($index, $joueur);
//Tournoi::supprimerJoueur($index);
//Tournoi::getJoueurs();

//Tournoi::creerMatch($joueur1, $joueur2);
//Tournoi::listerMatchs();


?>
