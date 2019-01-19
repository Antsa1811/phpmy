<?php
require'exeFIchier.php';

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
                            <th class="text-center"> Date </th>
                            <th class="text-center"> Commentaire </th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>


            </div>

            <div class="card-footer">Voir les commentaire recents</div>
        </div>
    </div>
    <hr/>


    <a href="index.php" class="btn btn-info">Lien pour revenir index.php</a>

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
