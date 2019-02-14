<?php
require'exeFIchier.php';

$crud="SELECT * FROM minichat";
$tab=affiche($crud);

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href=css/toast.min.css>
    <link rel="stylesheet" type="text/css" href=css/bootstrap.min.css>
    <link rel="stylesheet" type="text/css" href=css/style.css>
    <title>Teste base de  donner</title>
</head>
<body>
<div class="container margin-top ">
    <h3 class="text-center">Mini chat </h3>
    <hr/>
    <div class="margin-top">
        <div class="card bg-muted">
            <div class="card-header text-center">
                <h3 class="p-2" >Formulaire de minichat</h3>
            </div>
            <div class="card-body">
                <h4 class="p-1 text-center"> Listes des commentaire recents </h4>
                    <table class="table table-bordered table-condansed table-striped">
                        <thead class="text-center">
                        <tr >
                            <th class="text-center"> Pseudo </th>
                            <th class="text-center"> Commentaire </th>
                            <th class="text-center"> Date </th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($tab as $tablo)
                                {
                                    ?>
                            <tr>
                                
                                <td><?php echo $tablo[1]; ?></td>
                                <td><?php echo $tablo[2]; ?></td>
                                <td><?php echo $tablo[3]; ?></td>
                                 
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>

                    </table>


            </div>

            <div class="card-footer">Voir les commentaire recents</div>

        </div>
        <a href="index.php" class="btn btn-info margin-top">Lien pour revenir index.php</a>
        <button type="button" class="btn btn-primary margin-top" data-toggle="modal" data-target="#minichat" >Ajouter des commentaires</button>
      
        <!--Modal pour le formulaire minichat -->


</div>


    <div class="modal fade" id="minichat" tabindex="-1" role="dialog" aria-labelledby="modalMinichat" aria-hidden="true">
        <div class="modal-dialog" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalMinichat" >Ajouter votre commentaire</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Fermer"  >
                        <span aria-hidden="true" >x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formChat" action="" method="POST" >
                        <div class="form-group">
                            <label for="pseudo" class="form-group-label">Votre pseudo</label>
                            <input type="text" class="form-control" id="pseudo" name="pseudo" require="required">
                        </div>

                        <div class="form-group">
                            <label for="pseudo" class="form-group-label">Votre commentaire</label>
                            <textarea name="comment" class="form-control" id="comment" cols="30" rows="5" require="required"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" type="button" data-dismiss="modal" >Fermer</button>
                            <button class="btn btn-success" id="btnModal" name="btnModal" type="submit" >Somettre le formulaire</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<!--DEBUT D INSERTION JAVASCRIPT -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
<script type="text/javascript" src="js/popper.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/app.js" ></script>
<script type="text/javascript" src="js/toast.min.js" ></script>
<script type="text/javascript" src="js/app2.js"></script>
</body>
</html>
