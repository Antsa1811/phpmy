<?php
function  bddBase($PARAM_hote,$PARAM_port,$PARAM_nom_bd)
{
/*$PARAM_hote='localhost';
$PARAM_port='3306';
$PARAM_nom_bd='exophp';
$PARAM_utilisateur='root';
$PARAM_mot_passe='';*/

try
{
    $bdd= new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
}

catch(Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br/>';
    echo 'N° : '.$e->getode();
}
}


 ?>
