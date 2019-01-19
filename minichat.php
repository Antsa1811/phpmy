<?php
require 'function.php';
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
    <h3 class="text-center">Teste de base de donner pour exercice php</h3>
    <hr/>
    <div class="margin-top">
        <div class="card bg-muted">
            <div class="card-header text-center">
                <h3 class="p-2" >Formulaire de messagerie</h3>
            </div>
            <div class="card-body">
                <form action="" id="baseteste" method="POST">
                    <div class="form-group">
                        <label for="destinataire">Destinataire</label>
                        <input type="text" name="destinataire" id="destinataire" placeholder="Le destinataire" class="form-control" required="required" maxlength="25">
                        <small id="destinataireHelp" class="form-text text-muted">Veuillez entrer un text max de 25</small>
                    </div>
                    <div class="form-group">
                        <label for="sujet">Sujet</label>
                        <input type="text" class="form-control" maxlength="50" name="sujet" id="sujet" placeholder="Votre sujet" required="required" >
                        <small id="destinataireHelp" class="form-text text-muted">Veuillez entrer un text max de 25</small>
                    </div>
                    <div class="form-group">
                        <label for="message">Votre message</label>
                        <textarea rows="5" name="message" id="message" required class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary" id="btnEvoyer" name="" type="submit">Envoyer</button>
                </form>
            </div>
            <div class="card-footer">Consulter votre adresse mail</div>
        </div>
    </div>
    <hr/>


    <a href="index.php" class="btn btn-info">Lien pour revenir index.php</a>

    <button class="btn btn-info" name="btnToast" id="btntoast" >Alert teste</button>
    <button class="btn btn-primary" name="reset" id="reset" >Reset</button>
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
