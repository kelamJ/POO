<?php
include("Personnage.class.php");

$p = new Personnage();

$p->getNom("Malek");
$p->getPrenom("Julien");
$p->getAge(22);
$p->getSexe("Homme");

echo ($p);