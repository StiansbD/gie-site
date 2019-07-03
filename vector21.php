<?php $page=0 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><title>GIE - Vector 21</title>
    <?php include("includes/style.php") ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
  </head>
  <body>
    <?php include("includes/navbar.php") ?>

    <div class="content">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="page-header">
            <h1 class="text-left">Vector 21</h1>
          </div>
          <p>
            <div class="media">
              <div class="pull-left">
                <a href="img/stuff/vector.png">
                  <img class="media-object" src="img/stuff/vector.png" alt="Image d'un Vector 21.">
                </a>
              </div>
              <div class="media-body">
                Le Vector 21 permet plusieurs actions interessantes :
                <ol>
                  <li>Connaitre la distance d'un objet par rapport à soit <kbd>R</kbd></li>
                  <li>Connaitre l'azimut d'un objet par rapport à soit <kbd>TAB</kbd></li>
                  <li>Connaitre la hauteur d'un bâtiment : <kbd>R</kbd> + <kbd>R</kbd> maintenue sur la base jusqu'à la hauteur</li>
                  <li>Connaitre la distance entre deux points : <kbd>R</kbd> maintenue + <kbd>TAB</kbd> un coup jusqu'à apparition de <b>1P</b>.<br>
                  Puis allez au point suivant en gardant <kbd>R</kbd> maintenue</li>
                </ol>
              </div>
            </div>
          </p>
        </div>
        <div class="panel-body">
          <a href="/stuff#others"><button class="btn btn-danger"><i class="fas fa-undo"></i> Retour</button></a>
        </div>
      </div>
    </div>

    <?php include("includes/footer.php") ?>
    <?php include("includes/script.php") ?>
  </body>
</html>
