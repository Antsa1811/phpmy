<?php
require 'find.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>Recherche de film</title>
  </head>
  <body>
    <div class="container margin-top">
         <div class="card bg-muted ">
             <div class="card-header">
                 <h2 class="text-info text-center">Recherche film</h2>
             </div>
             <div class="card-body">
                <form action="find.php" method="POST">
                    <div class="formgroup">
                        <label for="filmFind">Film à rechercher</label>
                        <input type="text" class="form-control" id="filmFind" name="filmFind">
                    </div>
                    <div class="row">
                         <div class="margin-top col text-center">
                           <input type="submit" class="btn btn-success" id="btnFind" value="Rechercher" name="btnFind">
                             <a href="index.php" class="btn btn-info">Revenir sur la page d'aceuille</a>
                    </div>
                    </div>
                </form>
            </div>
            <h2 class="text-info text-center">Resultat afficher</h2>
            <?php require 'tabloFind.php'; ?>


<!-- STARTS SCRIPT JAVASCRIPT -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
    <script type="text/javascript" src="js/popper.min.js" ></script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/app.js" ></script>
    </div>
  </body>
</html>
