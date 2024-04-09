<?php

class TennisMatch
{
    private string $score;
    private DateTime $date;

    public function __construct(private JoueurInterface $joueur1, private JoueurInterface $joueur2)
    {
        $this->score = "[0-0]";
        $this->date = new DateTime();
    }

    public function jouerMatch()
    {
        // Génération de score aléatoire.
        $score1 = (string)rand(1, 10);
        $score2 = (string)rand(1, 10);

        // Si match nul on boucle la methode.
        if ($score1 === $score2) {
            $this->jouerMatch();
        } else {
            $this->score = "[$score1-$score2]";
        }
        echo $this->score;
    }

    public function getVainqueur()
    {
        // Suppression des crochets de mon score
        $score_trim = trim($this->score, "[]");

        // Décomposition de ma string en tableau
        $score_split = explode("-", $score_trim);

        // Transformation des valeurs du tableau en int
        $score_joueur1 = (int)$score_split[0];
        $score_joueur2 = (int)$score_split[1];

        if ($score_joueur1 > $score_joueur2) {
            print_r($this->joueur1) ;
        } else {
            print_r($this->joueur2) ;
        }
    }
}