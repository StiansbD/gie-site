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
            <h2 class="text-left">Insertion de la traduction française du manuel de déminage</h2>
          </div>
          <p>
            Dans votre dossier mission, Créez un fichier nommé <samp>init.sqf</samp>.
            Dans le fichier <samp>init.sqf</samp>, insérez le code suivant :
            <br>
            <details>
              <summary style="cursor: pointer;" style="cursor: pointer;">code</summary>
              <div class="text-right">
                <button class="btn  btn-danger" data-clipboard-target="#to-copy-1"><i class="fas fa-copy"></i> Copier</button>
                <br><br>
              </div>
              <pre>
              <code id="to-copy-1">
[] execVM "bombManual.sqf";
              </code></pre>
            </details>
          </p>
          <p>
            Créez un fichier nommé <samp>bombManual.sqf</samp>. Dans le fichier
            <samp>bombManual.sqf</samp>, insérez le code suivant :
            <details>
              <summary style="cursor: pointer;">code</summary>
              <div class="text-right">
                <button class="btn  btn-danger" data-clipboard-target="#to-copy-2"><i class="fas fa-copy"></i> Copier</button>
                <br><br>
              </div>
              <pre>
              <code id="to-copy-2">
if !(hasInterface) exitWith {};
waituntil {alive player};

player createDiarySubject ["bombManual","Manuel du demineur"];

player createDiaryRecord ["bombManual", ["Credits", "&lt;font color='#add118' size=20&gt;Credits&lt;/font&gt;
&lt;br&gt;All rights belong to the MCC (Mission Control Center) development team.
&lt;br/&gt;Translated by Gavin 'Morbakos' Sertix for the Groupe d'Intervention Europeen (G.I.E)

&lt;br/&gt;
&lt;br/&gt;Tous les droits reviennent à l'equipe de developpement de MCC (Mission Control Center).
&lt;br/&gt;Traduit par Gavin 'Morbakos' Sertix pour le Groupe d'Intervention Europeen (G.I.E)"]];

player createDiaryRecord ["bombManual", ["Module pave numerique","&lt;font color='#add118' size=20&gt;Module pave numerique&lt;/font&gt;
&lt;br/&gt;Appuyez sur les boutons du pave numerique dans l'ordre de droite lorsque leurs symboles apparaissent de gauche à droite.
&lt;br/&gt;
&lt;br/&gt;&lt;font color='#add118' size=15&gt;Numero de serie divisible par 7&lt;/font&gt;
&lt;br/&gt;[ ^ , p , 2 , P , M , N , 0 , n , o , % , # , ) , } , | , i , m , I ]
&lt;br/&gt;
&lt;br/&gt;&lt;font color='#add118' size=15&gt;Autre&lt;/font&gt;
&lt;br/&gt;[ 0 , m , ) , o , | , # , ^ , n , P , i , N , 2 , I , M , % , p , } ]"]];

player createDiaryRecord ["bombManual", ["Module Case a cocher","&lt;font color='#add118' size=20&gt;Module Case a cocher&lt;/font&gt;
&lt;br/&gt;Cochez chaque case en fonction du symbole au-dessus et du type de bombe.
&lt;br/&gt;
&lt;br/&gt;&lt;font color='#add118' size=15&gt;Numero de serie divisible par 3 et 7&lt;/font&gt;
&lt;br/&gt;@ - off 1 - off
&lt;br/&gt;^ - on ~ - on
&lt;br/&gt;) - on ] - on
&lt;br/&gt;( - off [ - on
&lt;br/&gt;| - on \ - off
&lt;br/&gt;/ - off ? - off
&lt;br/&gt;3 - off % - off
&lt;br/&gt;* - on L - on
&lt;br/&gt;8 - on 5 - off
&lt;br/&gt;; - on A - off
&lt;br/&gt;a - on g - off
&lt;br/&gt;G - on b - off
&lt;br/&gt;B - on p - off
&lt;br/&gt;P - on w - on
&lt;br/&gt;W - off m - on
&lt;br/&gt;n - off N - on
&lt;br/&gt;M - off t - on
&lt;br/&gt;T - off ` - on
&lt;br/&gt;: - off o - on
&lt;br/&gt;0 - off
&lt;br/&gt;
&lt;br/&gt;&lt;font color='#add118' size=15&gt;Numero de serie divisible uniquement par 3&lt;/font&gt;
&lt;br/&gt;@ - off 1 - off
&lt;br/&gt;^ - off ~ - on
&lt;br/&gt;) - on ] - on
&lt;br/&gt;( - off [ - on
&lt;br/&gt;| - on \ - off
&lt;br/&gt;/ - off ? - off
&lt;br/&gt;3 - off % - on
&lt;br/&gt;* - off L - on
&lt;br/&gt;8 - off 5 - off
&lt;br/&gt;; - on A - on
&lt;br/&gt;a - off g - off
&lt;br/&gt;G - on b - on
&lt;br/&gt;B - on p - on
&lt;br/&gt;P - off w - on
&lt;br/&gt;W - off m - off
&lt;br/&gt;n - off N - off
&lt;br/&gt;M - on t - on
&lt;br/&gt;T - on ` - off
&lt;br/&gt;: - off o - on
&lt;br/&gt;0 - off
&lt;br/&gt;
&lt;br/&gt;&lt;font color='#add118' size=15&gt;Autre&lt;/font&gt;
&lt;br/&gt;@ - off 1 - off
&lt;br/&gt;^ - on ~ - off
&lt;br/&gt;) - on ] - off
&lt;br/&gt;( - on [ - off
&lt;br/&gt;| - off \ - off
&lt;br/&gt;/ - off ? - on
&lt;br/&gt;3 - on % - on
&lt;br/&gt;* - on L - on
&lt;br/&gt;8 - on 5 - off
&lt;br/&gt;; - off A - off
&lt;br/&gt;a - on g - on
&lt;br/&gt;G - off b - off
&lt;br/&gt;B - on p - off
&lt;br/&gt;P - off w - off
&lt;br/&gt;W - off m - on
&lt;br/&gt;n - off N - on
&lt;br/&gt;M - off t - on
&lt;br/&gt;T - off ` - on
&lt;br/&gt;: - off o - off
&lt;br/&gt;0 - off"]];

player createDiaryRecord ["bombManual", ["Module Fils","&lt;font color='#add118' size=20&gt;Module Fils&lt;/font&gt;

&lt;br/&gt;Chaque module de fils peut avoir entre 3 et 8 fils de differentes couleurs.

&lt;br/&gt;Vous devez couper un fil pour desarmer le module.

&lt;br/&gt;Couper le mauvais fil signifie une faute.

&lt;br/&gt;

&lt;br/&gt;&lt;font color='#add118' size=15&gt;Numero de serie divisible par 3&lt;/font&gt;

&lt;br/&gt;

&lt;br/&gt;3 fils:

&lt;br/&gt;S'il n'y a pas de fils rouges, coupez le premier fil.

&lt;br/&gt;Sinon, si le dernier fil est vert, coupez le dernier fil.

&lt;br/&gt;Sinon, s'il y a un fil bleu, coupez le fil bleu.

&lt;br/&gt;Sinon, s'il y a un fil noir, coupez le fil noir.

&lt;br/&gt;Sinon, coupez le deuxième fil.

&lt;br/&gt;

&lt;br/&gt;4 ou 5 fils:

&lt;br/&gt;S'il n'y a pas de fils blancs, couper le deuxième fil.
&lt;br/&gt;Au contraire, si le dernier fil est noir, coupez le dernier fil.
&lt;br/&gt;S'il y a un fil vert, couper le fil vert.
&lt;br/&gt;S'il y a un fil rouge, couper le fil rouge.
&lt;br/&gt;Dans le cas contraire, couper le troisième fil.
&lt;br/&gt;
&lt;br/&gt;6+ fils :
&lt;br/&gt;S'il n'y a pas de fils verts, couper le troisième fil.
&lt;br/&gt;Si le dernier fil est bleu, coupez le dernier fil.
&lt;br/&gt;S'il y a un fil noir, couper le fil noir.
&lt;br/&gt;S'il y a un fil blanc, couper le fil blanc.
&lt;br/&gt;Dans le cas contraire, couper le premier fil.
&lt;br/&gt;

&lt;br/&gt;&lt;font color='#add118' size=15&gt;Numero de serie non divisible par 3&lt;/font&gt;

&lt;br/&gt;
&lt;br/&gt;3 fils :
&lt;br/&gt;S'il n'y a pas de fils verts, couper le premier fil.
&lt;br/&gt;Au contraire, si le dernier fil est blanc, coupez le dernier fil.
&lt;br/&gt;S'il y a un fil noir, couper le fil noir.
&lt;br/&gt;S'il y a un fil bleu, coupez le fil bleu.
&lt;br/&gt;Dans le cas contraire, couper le deuxième fil.
&lt;br/&gt;
&lt;br/&gt;4-5 fils :
&lt;br/&gt;S'il n'y a pas de fils bleus, couper le deuxième fil.
&lt;br/&gt;Au contraire, si le dernier fil est blanc, coupez le dernier fil.
&lt;br/&gt;S'il y a un fil rouge, couper le fil rouge.
&lt;br/&gt;S'il y a un fil bleu, coupez le fil bleu.
&lt;br/&gt;Dans le cas contraire, couper le troisième fil.
&lt;br/&gt;
&lt;br/&gt;6+ fils
&lt;br/&gt;S'il n'y a pas de fils rouges, couper le troisième fil.
&lt;br/&gt;Au contraire, si le dernier fil est noir, coupez le dernier fil.
&lt;br/&gt;S'il y a un fil blanc, couper le fil blanc.
&lt;br/&gt;S'il y a un fil vert, couper le fil vert.
&lt;br/&gt;Dans le cas contraire, couper le premier fil."]];

player createDiaryRecord ["bombManual", ["General","&lt;font color='#add118' size=20&gt;Bombs &lt;/font&gt;Bombs

&lt;br/&gt;Une fois que le minuteur de la bombe a demarre, vous ne pouvez plus l'arrêter.

&lt;br/&gt;La bombe explosera lorsque son compte à rebours atteindra zero ou si vous fermez le dialogue ou si vous avez eu 3 coups.

&lt;br/&gt;Pour desamorcer la bombe, vous devrez desamorcer chacun de ses modules avant la fin du temps imparti.

&lt;br/&gt;

&lt;br/&gt;

&lt;br/&gt;&gt;&lt;font color='#add118' size=20&gt;Modules&lt;/font&gt;Font

&lt;br/&gt;Chaque bombe peut avoir plusieurs modules selon sa difficulte. Chaque module est discret et peut être desarme à tout moment - mais vous devrez desarmer tous les modules avant que l'horloge ne s'arrête pour eviter l'explosion de la bombe.

&lt;br/&gt;Puisque vous ne pouvez pas fermer la boîte de dialogue pendant le desarmement d'une bombe, vous devrez vraiment vous adresser à un autre joueur qui a la bombe manuellement ouverte devant lui et il devra vous guider dans le processus de desarmement des modules.
&lt;br/&gt;
&lt;br/&gt;&gt;&lt;font color='#add118' size=20&gt;Numero de serie&lt;/font&gt;Numero de serie

&lt;br/&gt;Chaque bombe a son propre numero de serie unique imprime sur le devant. Faites attention au numero de serie car il affectera la methode de desarmement de la bombe."]];</code></pre>
            </details>
          </p>
          <p>
            Votre dossier de mission doit contenir les éléments suivants:
            <ul style="list-style: none;">
              <li><i class="fas fa-check"></i> <samp>mission.sqm</samp></li>
              <li><i class="fas fa-check"></i> <samp>init.sqf</samp></li>
              <li><i class="fas fa-check"></i> <samp>bombManual.sqf</samp></li>
            </ul>
          </p>
          <p>
            Tadaa ! Si vous ne vous êtes pas trompé, vous aurez un joli petit onglet <i>"Manuel du démineur"</i> sur votre carte <i class="fas fa-smile text-warning"></i>
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
