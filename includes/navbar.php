<nav class="navbar">
  <div class="navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img alt="Logo du GIE" src="/img/logo.png">
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if ($page == "1") {echo 'class="active"';} ?>><a href="/">Accueil</a></li>
        <li <?php if ($page == "2") {echo 'class="active"';} ?>><a href="/planning">Planning</a></li>
        <li <?php if ($page == "3") {echo 'class="active"';} ?>><a href="/missions">Missions</a></li>
        <li <?php if ($page == "4") {echo 'class="active"';} ?>><a href="/rules">Rules</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li <?php if ($page == "5") {echo 'class="active"';} ?>><a href="/team">Team</a></li>
        <li <?php if ($page == "6") {echo 'class="active"';} ?>><a href="/rejoindre">Rejoindre</a></li>
        <li <?php if ($page == "7") {echo 'class="active"';} ?>><a href="/info">A propos</a></li>
        <li <?php if ($page == "8") {echo 'class="active"';} ?>><a href="/contact">Contact</a></li>
        <!--
          <form class="navbar-form navbar-left">
            <button type="submit" class="btn btn-default"><i class="fas fa-sign-in-alt"></i> Login</button>
          </form>
        -->
        <!---->

        <li <?php if ($page == "9") {echo 'class="active dropdown"';} else {echo 'class="dropdown"';}?>>
          <a href="/profil" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Stians <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/profil"><i class="fas fa-user"></i> Profil</a></li>
            <li><a href="/profil"><i class="fas fa-book"></i> Mes tutos</a></li>
            <li><a href="/profil"><i class="fas fa-list"></i> Missions jouées</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{!! route('logout') !!}"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
          </ul>
        </li>

        <!---->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
  <img class="center-block" alt="Logo du GIE" src="/img/navbar-logo.png"></a>
</nav>
