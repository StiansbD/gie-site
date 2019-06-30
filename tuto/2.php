<?php $page=0 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><title>GIE - Tutoriels</title>
    <?php include("../includes/style.php") ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
  </head>
  <body>
    <?php include("../includes/navbar.php") ?>

    <div class="content">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="page-header">
            <h2 class="text-left">Insertion du script de parachutage HALO</h2>
          </div>
          <p>
            Dans l'éditeur, accédez aux propriétés de l'objet sur lequel vous
            souhaitez ajouter le saut HALO. Dans le champ <b>init</b>, insérez
            le code suivant :
            <br>
            <details>
              <summary style="cursor: pointer;" style="cursor: pointer;">code</summary>
              <div class="text-right">
                <button class="btn  btn-danger" data-clipboard-target="#to-copy-1"><i class="fas fa-copy"></i> Copier</button>
                <br><br>
              </div>
              <pre>
              <code id="to-copy-1">
this addAction ["Saut HALO", {[] execVM "halo.sqf"}];
              </code></pre>
            </details>
          </p>
          <p>
            Créez un fichier nommé <samp>halo.sqf</samp>, et insérez le code suivant :
            <br>
            <details>
              <summary style="cursor: pointer;" style="cursor: pointer;">code</summary>
              <div class="text-right">
                <button class="btn  btn-danger" data-clipboard-target="#to-copy-2"><i class="fas fa-copy"></i> Copier</button>
                <br><br>
              </div>
              <pre>
              <code id="to-copy-2">
openMap true;
hint "Sélectionner le lieu de parachutage";
// Sauvegarde inventaire
_b = backpack player;
_bi = backpackItems player;

// Ajouter le parachute au joueur
removeBackpack player;
player addBackpack "B_Parachute";

mapclick = false;
onMapSingleClick "clickpos = _pos; mapclick = true; onMapSingleClick """";true;";

// Attendre que le joueur ai clické
waituntil {mapclick or !(visiblemap)};
_pos = clickpos;
_height = 1000;

player setPos [_pos select 0, _pos select 1,_height];
hint '';


// Attendre que le joueur atterisse pour lui redonner son sac
waitUntil {(getposATL player select 2) < 20};
removeBackpack player;
player addbackpack _b;
{
player additemtobackpack _x;
} foreach _bi;
              </code></pre>
            </details>
          </p>
          <p>
            Votre dossier de mission doit contenir les éléments suivants :
            <ul style="list-style: none;">
              <li><i class="fas fa-check"></i> <samp>mission.sqm</samp></li>
              <li><i class="fas fa-check"></i> <samp>halo.sqf</samp></li>
            </ul>
          </p>
          <p>
            Tadaa ! Si vous ne vous êtes pas trompé, vous aurez la possibilité
            de lancer le saut HALO depuis l'objet <i class="fas fa-smile text-warning"></i>
          </p>
          <br>
          <a href="/tutos"><button class="btn  btn-danger"><i class="fas fa-undo"></i> Retour</button></a>
        </div>
      </div>
    </div>

    <?php include("../includes/footer.php") ?>
    <?php include("../includes/script.php") ?>
  </body>
</html>
