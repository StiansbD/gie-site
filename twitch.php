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
            <h1 class="text-left">Morbakos <small><a href="https://www.twitch.tv/morbakos">Regarder sur Twitch</a></small></h1>
          </div>
          <p>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://player.twitch.tv/?channel=morbakos"></iframe>
            </div>
          </p>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="page-header">
            <h1 class="text-left">Pippermint <small><a href="https://www.twitch.tv/pippermint">Regarder sur Twitch</a></small></h1>
          </div>
          <p>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://player.twitch.tv/?channel=pippermint"></iframe>
            </div>
          </p>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="page-header">
            <h1 class="text-left">Jack Smith <small><a href="https://www.twitch.tv/skythemoon">Regarder sur Twitch</a></small></h1>
          </div>
          <p>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://player.twitch.tv/?channel=skythemoon"></iframe>
            </div>
          </p>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="page-header">
            <h1 class="text-left">MultiTwitch <small><a href="http://multitwitch.tv/morbakos/pippermint/skythemoon">Regarder sur MultiTwitch</a></small></h1>
          </div>
          <p>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="http://multitwitch.tv/morbakos/pippermint/skythemoon"></iframe>
            </div>
          </p>
        </div>
      </div>
    </div>

    <?php include("includes/footer.php") ?>
    <?php include("includes/script.php") ?>
  </body>
</html>
