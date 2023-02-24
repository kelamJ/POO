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

    public function getAnciennete()
    {
        $dateEmbauche = new DateTime($this->dateEmb);
        $dateNow = new DateTime();
        $anciennete = $dateEmbauche->diff($dateNow);
        echo "$this->nom $this->prenom est dans l'entreprise depuis $anciennete->y ans.";
    }

    public function getPrime()
    {
        $salaireAnnuel = is_int($this->salaire);
        $primeAnnuel = $salaireAnnuel * 0.05;
        $primeAncien = $salaireAnnuel * 0.02;
        // $datePrime = $anciennete->y;
        // echo "$datePrime";
        echo "";
    }
}