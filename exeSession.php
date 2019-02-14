<?php
if(isset($_COOKIE['id_session']))
{
	$id_session=$_COOKIE['id_session'];
}
else
{
	$id_session=$_SERVER['REMOTE_ADDR']. date("U");
	setCookie("id_session",$id_session);
}
require 'exeFIchier.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Approche cookies</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<h1 class="text-center">Faite votre commande</h1>
	<?php
		if(isset($_POST['typeChoix']))
		{
			echo "Bonjour , Nous vous avons attribue ka session $id_session <br/> ";
			formCommande("Entrée");
		}
	?>
</body>
</html>