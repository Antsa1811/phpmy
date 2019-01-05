<?php
require'function.php';


bddBase("localhost","3306","phpmy","root","");


$destinataire=isset($_POST['destinataire']) ? $_POST['destinataire'] :"";
$sujet=isset($_POST['sujet']) ? $_POST['sujet'] :"";
$message=isset($_POST['message']) ? $_POST['message'] :"" ;

$requestMail=verifMail($destinataire,$sujet,$message);

if($requestMail[0]==true)
{
    echo "formeValid";
    $tab=array($destinataire,$sujet,$message);
    $crud="INSERT INTO email(destinataire,sujet,text) values (?,?,?)";
    xRequet($crud,$tab);

}else
{

}



?>