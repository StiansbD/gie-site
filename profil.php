<?php $page=9 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><title>GIE - Profil</title>
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
              <div class="media" style="margin: 2%; margin-left: 5%;">
                <div class="pull-left">
                  <img src="/img/user/stians.png" alt="Image de profil." style="width: 100%;">
                </div>
                <div class="media-body">
                  <h1 class="text-left">Stians <img alt="Logo du GIE" src="/img/logo.png" style="width: 5%;"></h1> 
                  Chris, Bordeaux
                  <p>
                    Membre depuis : Novembre 2018 <br>
                    Grade : <span style="color: rgb(113, 54, 138);">@site</span>
                  </p>
                </div>
                <br>
                <a href="/profils/edit/1"><button class="btn btn-danger"><i class="fas fa-edit"></i> Modifier</button></a>
                <a href="/profils/share/1"><button class="btn btn-danger"><i class="fas fa-share-square"></i> Partager</button></a>
              </div>
              <br><br><br>
            </div>
            <p>
              <h3 class="text-center">Missions récement jouées</h3>
              <ul class="list-group">
                <a class="text-danger" href="/mission/1">
                  <li class="list-group-item">
                    <span class="badge"><i class="fas fa-times text-danger"></i></span>
                    No deal - by Ledoc <small class="text-primary"> le 19/06/2019</small>
                  </li>
                </a>
                <a class="text-success" href="/mission/2">
                  <li class="list-group-item">
                    <span class="badge"><i class="fas fa-check text-success"></i></span>
                    Le Savant Fou - by Kate <small class="text-primary"> le 30/05/2019</small>
                  </li>
                </a>
                <a class="text-success" href="/mission/3">
                  <li class="list-group-item">
                    <span class="badge"><i class="fas fa-check text-success"></i></span>
                    Training Tanoa - by Jack Smith <small class="text-primary"> le 22/05/2019</small>
                  </li>
                </a>
                <a class="text-success" href="/mission/4">
                  <li class="list-group-item">
                    <span class="badge"><i class="fas fa-check text-success"></i></span>
                    Operation Railway - by Jack Smith <small class="text-primary"> le 18/04/2019</small>
                  </li>
                </a>
                <a class="text-success" href="/mission/2">
                  <li class="list-group-item">
                    <span class="badge"><i class="fas fa-check text-success"></i></span>
                    Le Savant Fou - by Kate <small class="text-primary"> le 21/03/2019</small>
                  </li>
                </a>
              </ul>
            </p>
          </div>
        </div>
      </div>

    <?php include("includes/footer.php") ?>
    <?php include("includes/script.php") ?>
  </body>
</html>
