<?php $page=0 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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
            <h1 class="text-center">Équipement</h1>
          </div>
          <div class="row center-block">
            <div class="col-xs-6 col-md-3">
              <a href="img/stuff/pareballe.png" class="">
                <img src="img/stuff/pareballe.png" alt="Image d'un équipement d'un soldat.">
              </a>
            </div>
          </div>
          <br>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="page-header">
            <h1 class="text-left">Liste des équipements utilisés par les soldats du GIE</h1>
            Cette liste reprends les équipements utilisés par les différentes
            composantes du GIE, ainsi qu'un lien expliquant leurs fonctions et leurs utilisations.
          </div>
          <p>
            <div class="media">
              <div class="pull-left">
                <a href="img/stuff/grenade.png">
                  <img class="media-object" src="img/stuff/grenade.png" alt="Image de l'exemple 1.">
                </a>
              </div>
              <div class="media-body">
                <h3 class="text-left">Équipement communs aux composantes</h3>
                <ul>
                  <li>Les différentes types de grenades</li>
                  <li>
                    <ul>
                      <li>Grenade à fragmentation (létale)</li>
                      <li>Grenade fumigène (non-létale)</li>
                      <li>Grenade infrarouge (non-létale)</li>
                    </ul>
                  </li>
                  <li>Serflex (menottes tactiques en plastique)</li>
                  <li>Bandages et drogues (ces équipements sont particuliers, car ils s'inscrivent dans la démarche des 3S)</li>
                  <li>Outils de tranchés</li>
                </ul>
              </div>
            </div>
          </p>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="page-header">
            <h1 class="text-left">Liste des équipements par composantes et par modules</h1>
          </div><br>
          <div class="row">
            <!-- Alpha et Hotel -->
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="">
                  <img src="img/stuff/composantes/alpha-hotel.png" alt="Icon des composantes Alpha.">
                </a>
                <div class="caption text-center">
                  <h2>Alpha et Hotel</h2>
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      Modules
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li class="dropdown-header">Alpha</li>
                      <li><a href="#">Pilote</a></li>
                      <li><a href="#">Copilote</a></li>
                      <li class="dropdown-header">Hotel</li>
                      <li><a href="#">Pilote</a></li>
                      <li><a href="#">Copilote</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Bravo -->
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/bravo">
                  <img src="img/stuff/composantes/bravo.png" alt="Icon des composantes Bravo.">
                </a>
                <div class="caption text-center">
                  <h2>Bravo</h2>
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      Modules
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Commandent de bord</a></li>
                      <li><a href="#">Pilote</a></li>
                      <li><a href="#">Copilote</a></li>
                      <li><a href="#">Tireur</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Charlie -->
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/charlie">
                  <img src="img/stuff/composantes/charlie.png" alt="Icon des composantes Charlie.">
                </a>
                <div class="caption text-center">
                  <h2>Charlie</h2>
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      Modules
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">SL / TL</a></li>
                      <li><a href="#">OPR</a></li>
                      <li><a href="#">Médic</a></li>
                      <li><a href="#">TP</a></li>
                      <li><a href="#">MG</a></li>
                      <li><a href="#">GL</a></li>
                      <li><a href="#">AT</a></li>
                      <li><a href="#">AA</a></li>
                      <li><a href="#">Delta</a></li>
                      <li><a href="#">Fusilier</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- November -->
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/november">
                  <img src="img/stuff/composantes/november.png" alt="Icon des composantes November.">
                </a>
                <div class="caption text-center">
                  <h2>November</h2>
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      Modules
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Leader</a></li>
                      <li><a href="#">Médic</a></li>
                      <li><a href="#">Delta</a></li>
                      <li><a href="#">Fusilier</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Roméo -->
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/romeo">
                  <img src="img/stuff/composantes/romeo.png" alt="Icon des composantes Roméo.">
                </a>
                <div class="caption text-center">
                  <h2>Roméo</h2>
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      Modules
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Leader</a></li>
                      <li><a href="#">Médic</a></li>
                      <li><a href="#">Delta</a></li>
                      <li><a href="#">Fusilier</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Sierra -->
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/sierra">
                  <img src="img/stuff/composantes/sierra.png" alt="Icon des composantes Sierra.">
                </a>
                <div class="caption text-center">
                  <h2>Sierra</h2>
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      Modules
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Sniper</a></li>
                      <li><a href="#">Spotteur</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-body">
          <br>
          <div class="row">
            <!-- DAGR -->
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/dagr">
                  <img src="img/stuff/dagr.png" alt="Icon du DAGR.">
                </a>
                <div class="caption text-center">
                  <h2>DAGR</h2>
                </div>
              </div>
            </div>
            <!-- Vector 21 -->
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/vector21">
                  <img src="img/stuff/vector.png" alt="Icon du Vector 21.">
                </a>
                <div class="caption text-center">
                  <h2>Vector 21</h2>
                </div>
              </div>
            </div>
            <!-- Outil de navigation -->
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/outilnavigation">
                  <img src="img/stuff/outilnav.png" alt="Icon de l'Outil de navigation.">
                </a>
                <div class="caption text-center">
                  <h2>Outil de navigation</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include("includes/footer.php") ?>
    <?php include("includes/script.php") ?>
  </body>
</html>
