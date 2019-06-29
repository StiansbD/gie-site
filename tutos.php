<?php $page=0 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><title>GIE - Tutoriels</title>
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
            <h1 class="text-center">Tutoriels</h1>
          </div>
          <h2>Liste des tutoriels disponibles :</h2>
          <p>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="/tuto/1">Insertion de la traduction française du manuel de déminage</a>
              </li>
              <li class="list-group-item">
                <a href="/tuto/2">Insertion du script de parachutage HALO</a>
              </li>
            </ul>
          </p>
        </div>
      </div>
    </div>

    <?php include("includes/footer.php") ?>
    <?php include("includes/script.php") ?>
  </body>
</html>
