<?php
require'function.php';

	bddBase("localhost","3306","phpmy","root","");
	global $bdd;

	$id=isset($_POST['id']) ? $_POST['id']:"";

	$titre=isset($_POST['titre']) ? $_POST['titre']:"";
	$auteur=isset($_POST['auteur']) ? $_POST['auteur']:"";
	$description=isset($_POST['description']) ? $_POST['description']:"";

	


	$modifFilm=verifFilm($titre,$auteur,$description);

	if($modifFilm[0]==true)
		{
			echo "true";
			/*$req=$bdd->prepare("UPDATE film SET titre=:titre, auteur=:auteur, description=:description WHERE id=:id");
			$req->execute(array('titre'=>$titre,'auteur'=>$auteur,'description'=>$description,'id'=>$id));*/
			
			/*$crud="UPDATE film SET titre=:titre, auteur=:auteur, description=:description WHERE id=:id";
			$tabCrud='titre'=>$titre,'auteur'=>$auteur,'description'=>$description,'id'=>$id;*/

			$crud="UPDATE film SET titre=?,auteur=?,description=? WHERE id=?";
			$tabCrud=array($titre,$auteur,$description,$id);
			modification($crud,$tabCrud);
			


		}
		else
			{

			}


	




	//$crud='UPDATE email set titre="'$titre'" , auteur=titre="'$titre'", description=titre="'$titre'"'



?>