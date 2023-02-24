<?php

// abstract class Humain
// {
//     public $nom;
//     public $prenom;
//     protected $age;

//     public function __construct($prenom, $nom, $age)
//     {
//         $this->nom = $nom;
//         $this->prenom = $prenom;
//         $this->setAge($age);
//     }

//     abstract public function travailler();

//     public function setAge($age)
//     {
//         if(is_int($age) && $age > 1 && $age <= 120){
//             $this->age =$age;
//         } else {
//             throw new Exception("L'âge d'un employé devrait être  un entier entre 1 et 120 !");
//         }
//     }
//     public function getAge($age)
//     {
//         return $this->age;
//     }
// }
// class Employe extends Humain
// {
//     public function travailler()
//     {
//         return "Je suis un employe et je travaille";
//     }

//     public function presentation() 
//     {
//         var_dump("Salut, je suis $this->prenom $this->nom et j'ai $this->age ans");
//     }
// }

// class Patron extends Employe
// {
//         public $voiture;

//     public function __construct($prenom, $nom, $age, $voiture)
//     {
//         parent::__construct($prenom, $nom, $age);

//         $this->voiture = $voiture;
//     }

// public function travailler()
// {
//     return "Je suis le patron et je travaille aussi !";
// }
//     public function presentation() 
//     {
//         var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans,et j'ai une voiture !");
//     }

//     public function rouler ()
//     {
//         var_dump("Bonjour, je roule avec ma $this->voiture");
//     }
// }

// $employe1 = new Employe("Malek", "Julien", 22);
// $employe2 = new Employe("Diouf", "Geoffrey", 30);
// $employe1->presentation();

// $patron = new Patron("Joseph", "Durand" , 50, "Ferrari");

// $patron->presentation();
// $patron->rouler();

// class Etudiant extends Humain
// {
//     public function travailler()
//     {
//         return "Je suis étudiant et je révise";
//     }
// }

// On apelle les focntions
faireTravailler($employe1);
faireTravailler($patron);

function faireTravailler(Humain $objet)
{
    var_dump("Travail en cours : {$objet->travailler()}");
}

// Grâce au private / protected et au setAge impossible de modifier l'age pour qu'elle ne soit pas incohérente
// 500 lignes de code

// $employe1->setAge(12);

//500 lignes de code



