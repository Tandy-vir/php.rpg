<?php
echo "Bonjour et bienvenue dans le donjon";
$Pseudo=readline("Choisissez votre nom :");
$Race = readline("Vous êtes un Homme, un Elfe ou un Nain ?");
$Class = readline("Choisissez votre spécialité: Guerrier, Mage, Voleur ou Ranger.");
echo "Cher ".$Pseudo.", vous êtes un ".$Race." ".$Class.". \n Préparez-vous a affronter le donjon.";

?>