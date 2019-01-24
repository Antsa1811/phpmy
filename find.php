<?php
require 'exeFichier.php';


$filmFind=isset($_POST['filmFind']) ? $_POST['filmFind']:'';



//$crud="SELECT * FROM film WHERE titre LIKE '%filmFind%' ";

$crud="SELECT * FROM film WHERE titre LIKE '%$filmFind%' || auteur LIKE '%$filmFind%' ";

$requeste=recherche($crud);
 if($requeste==1)
 {
	//$tab="SELECT * FROM FILM WHERE titre='$filmFind'";

	$tablo=afficheSolo($crud);
	
 }
 else
 {

     $error=false;
     $message="Resultat introuvable";
 }







?>