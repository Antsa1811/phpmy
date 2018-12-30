<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href=css/bootstrap.min.css>
      <link rel="stylesheet" type="text/css" href=css/style.css>
      <title>Teste base de  donner</title>
  </head>
  <body>
  <div class="container margin-top ">
      <h3 class="text-center">Teste de base de donner pour exercice php</h3>
      <?php
        bddBase("localhost","3306","phpmy","root","");

      ?>

      <hr/>
      <div class="margin-top">
          <div class="card bg-muted">
              <div class="card-header text-center">
                  <h3 class="p-2" >Formulaire de messagerie</h3>
              </div>
              <div class="card-body">
                  <form action="" method="POST">
                        <div class="form-group">
                            <label for="destinataire">Destinataire</label>
                            <input type="text" name="destinataire" id="destinataire" placeholder="Le destinataire" class="form-control">
                        </div>
                      <div class="form-group">
                          <label for="sujet">Sujet</label>
                          <input type="text" class="form-control" name="sujet" id="sujet" placeholder="Votre sujet">
                      </div>
                      <div class="form-group">
                          <label for="message">Votre message</label>
                          <textarea rows="5" name="message" id="message" class="form-control"></textarea>
                      </div>
                      <button class="btn btn-primary" type="submit">Envoyer</button>
                  </form>
              </div>
              <div class="card-footer">Consulter votre adresse mail</div>
          </div>
      </div>

  </div>

  </body>
</html>
