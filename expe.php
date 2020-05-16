<?php 

if (!empty($_GET))
{ 
    $reponse = $bdd->query('SELECT * FROM php_projet');
    $donnees = $reponse->fetch();
}

?>