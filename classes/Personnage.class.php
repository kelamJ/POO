<?php

class Personnage
{
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function getNom($gNom)
    {
        return $this->nom = $gNom;
    }

    public function getPrenom($gPrenom)
    {
        return $this->prenom = $gPrenom;
    }

    public function getAge($gAge)
    {
        return $this->age = $gAge;
    }

    public function getSexe($gSexe)
    {
        return $this->sexe = $gSexe;
    }

    public function __toString()
    {
        return "Nom d'utilisateur : " . $this->nom . "<br>" . "Prénom : " . $this->prenom . "<br>" . "Age :" . $this->age . "<br>" . "Sexe : " . $this->sexe;
    }
}