<?php
require 'exeFIchier.php';

$pseudo=isset($_POST['pseudo']) ? $_POST['pseudo'] :"";
$comment=isset($_POST['comment']) ? $_POST['comment'] :"";




$reqPseudo=checkString($pseudo);
$reqComment=checkString($comment);

$dateM=date("Y-m-d H:i:s");



if($reqPseudo == true || $reqComment == true)
{
    $tab=array($pseudo,$comment,$dateM);
    $crud="INSERT INTO minichat(pseudo,commentaire,dateInsert) VALUES (?,?,?)";


    var_dump($dateM);

    xRequet($crud,$tab);


    echo "valid form true";

 /* $req=$bdd->prepare('INSERT INTO minichat(pseudo,commentaire,dateInsert) VALUES (?,?,?);');
   $req->execute(array($pseudo,$comment,now()));*/
}
else
{
    echo "c'est vide";
}



?>