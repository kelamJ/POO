<?php

class Employe
{
    private $nom;
    private $prenom;
    private $dateEmb;
    private $poste;
    private $salaire;
    private $service;

    public function __construct($nom, $prenom, $dateEmb, $poste, $salaire, $service)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmb = $dateEmb;
        $this->poste = $poste;
        $this->salaire = $salaire;
        $this->service = $service;
    }

    public function Anciennete()
    {
        $dateEmbauche = new DateTime($this->dateEmb);
        $dateNow = new DateTime();
        $anciennete = $dateEmbauche->diff($dateNow);
        echo $anciennete->y;
        // return "$this->nom . $this->prenom . est dans l'entreprise depuis $anciennete"
    }

}