<?php
function  bddBase($PARAM_hote,$PARAM_port,$PARAM_nom_bd,$PARAM_utilisateur,$PARAM_mot_passe)
{
    /*$PARAM_hote='localhost';
    $PARAM_port='3306';
    $PARAM_nom_bd='exophp';
    $PARAM_utilisateur='root';
    $PARAM_mot_passe='';*/
    global $bdd;

    try
    {
        $bdd= new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
    }

    catch(Exception $e)
    {
        echo 'Erreur : '.$e->getMessage().'<br/>';
        echo 'N° : '.$e->getcode();
    }
}

function verifMail($destinataire,$sujet,$message)
{
    $return=true;
    $error=array();

    if(empty($destinataire) || !filter_var($destinataire,FILTER_SANITIZE_STRING))
    {
        $return=false;
        $error['destinataire']="Veuillez verifier votre destinataire";

    }

    if(empty($sujet) || !filter_var($sujet,FILTER_SANITIZE_STRING))
    {
        $return=false;
        $error['sujet']="Veuillez verifier votre sujet";
    }

    if(empty($message) || !filter_var($message,FILTER_SANITIZE_STRING))
    {
        $return=false;
        $error['message']="Veuillez verifier votre message";
    }
    return array($return,$error);

}
function xRequet($crud,$tab)
{
    global $bdd;
   $req=$bdd->prepare($crud);
   $req->execute($tab);
}
function affiche($crud)
{
    global $bdd;
    $req=$bdd->prepare($crud);
    $req->execute();
    $reqTab=$req->fetchall();

    return $reqTab;
}

function modification($crud,$tabCrud)
{
    global $bdd;
    $req=$bdd->prepare($crud);
    $req->execute($tabCrud);
}


function verifFilm($titre,$auteur,$description)
{
    $return=true;
    $error=array();


    if(empty($titre) || !filter_var($titre,FILTER_SANITIZE_STRING)) 
    {
        $return=false;
        $error['titre']="Verifier votre titre ";

    }

    if(empty($auteur) || !filter_var($auteur,FILTER_SANITIZE_STRING))
    {
        $return=false;
        $error['auteur']="Verifier votre auteur ";
    }

    if(empty($description) || !filter_var($description,FILTER_SANITIZE_STRING))
    {
        $return=false;
        $error['description']="Verifier votre description ";
    }

    return array($return,$error);


}

function recherche($crud)
{
    global $bdd;
    $req=$bdd->prepare($crud);
    $req->execute();

    $userExist=$req->rowCount();

    return $userExist;



}

 ?>
