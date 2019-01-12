<?php
require'function.php';
bddBase("localhost","3306","phpmy","root","");

$id=isset($_GET['id']) ? $_GET['id']:""; 

$req=$bdd->prepare("SELECT * from film WHERE id=$id");
$req->execute();
$reqTab=$req->fetch();


?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>Liste des filmes</title>
  </head>
  <body>
    <div class="container margin-top">
         <div class="card bg-muted ">
             <div class="card-header">
                 <h2 class="text-info text-center">Filme à modifier</h2>
             </div>
             <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" value="<?php echo($id); ?>" name="id" id="id">
                    <div class="formgroup">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" id="titre" value="<?php echo $reqTab['titre']; ?>" name="titre">
                    </div>
                     <div class="formgroup">
                        <label for="auteur">Auteur</label>
                        <input type="text" class="form-control" id="auteur" value="<?php echo $reqTab['auteur']; ?>"  name="auteur">
                    </div>
                     <div class="formgroup">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control"  id="description" cols="30" rows="5"><?php echo $reqTab['description']; ?> </textarea>
                    </div>
                    <div class="row">
                         <div class="margin-top col text-center">
                           <input type="submit" class="btn btn-outline-primary" id="btnModif" value="Modifier" name="btnModif">
                    </div>
                    </div>
                    <h4 id="request1"  name="request1" class="alert alert-info text-center margin-top"></h4>
                   
                </form>
            </div>

<!-- STARTS SCRIPT JAVASCRIPT -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
    <script type="text/javascript" src="js/popper.min.js" ></script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/app.js" ></script>
    </div>
  </body>
</html>
