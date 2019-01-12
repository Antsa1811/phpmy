<?php 
require('function.php');
bddBase("localhost","3306","phpmy","root","");
$crud="SELECT * FROM FILM";
$tablos=affiche($crud);




?>