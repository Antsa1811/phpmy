<?php
require 'exeFichier.php';


$filmFind=isset($_POST['filmFind']) ? $_POST['filmFind']:'';

var_dump($filmFind);

//$crud="SELECT * FROM film WHERE titre LIKE '%filmFind%' ";

$crud="SELECT * FROM film WHERE titre LIKE '%filmFind%' ";

$requeste=recherche($crud);

var_dump($requeste);






?>