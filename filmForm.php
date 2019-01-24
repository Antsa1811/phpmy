<?php
require('affiche.php');

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>Liste des film</title>
  </head>
  <body>
    <div class="container margin-top">
         <div class="card bg-muted ">
             <div class="card-header">
                 <h2 class="text-info text-center">Liste des films</h2>
             </div>
             <div class="card-body">
                 <table class="table table-bordered table-striped table-condensed">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Description</th>
                            <th>Modification</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tablos as $tablo) 
                            {
                            ?>

                        <tr>
                            <td><?php echo $tablo['titre']; ?></td>
                            <td><?php echo $tablo['auteur']; ?></td>
                            <td><?php echo $tablo['description']; ?></td>
                            <td><a target="alt" href="formModif.php?id=<?php echo $tablo['id'];?>">Modifier film</a></td>
                        </tr>
                         <?php                            
                            } ?>
                    </tbody>
                     
                 </table>
             </div>
             <div class="card-footer">
                 <span class="text-center text-muted " >Consulter tous les films</span>
             </div>
         </div>


    <a href="index.php" class="btn btn-primary margin-top">Aceuille</a>
    </div>
  </body>
</html>
