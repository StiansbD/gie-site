<?php $page=0 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><title>GIE - Outils de navigation</title>
    <?php include("includes/style.php") ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <?php include("includes/navbar.php") ?>

    <div class="content">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="page-header">
            <h1 class="text-left">Outil de navigation <small><a href="https://www.youtube.com/watch?v=vqgL7qMQguM">Regarder sur YouTube</a></small></h1>
          </div>
          <p>
            Merci à Commandos Parachutistes Arma.
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="https://www.youtube.com/embed/vqgL7qMQguM?rel=0&autoplay=1"></iframe>
            </div>
          </p>
          <br>
          <a href="/stuff#others"><button class="btn  btn-danger"><i class="fas fa-undo"></i> Retour</button></a>
        </div>
      </div>
    </div>

    <?php include("includes/footer.php") ?>
    <?php include("includes/script.php") ?>
  </body>
</html>
