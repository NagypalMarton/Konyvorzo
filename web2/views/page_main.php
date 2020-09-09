<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Könyvörző</title>
  <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/bootstrap-4.5.2-dist/css/bootstrap.min.css">
  <!--Bootsrap-->
  <script src="https://kit.fontawesome.com/90c4d42b46.js" crossorigin="anonymous"></script>
  <!--FontAwesome-->
  <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/stilus.css">
  <!--Saját-->
</head>

<body>
  <header>
    <h1 class="header">Könyvörző</h1>
    <h4><em>Az olvasás segít élni, életben maradni, növeli az empátiát, a másik ember és a világ megértését.
        <br>- <strong>Vekerdy Tamás</strong> -</em></p>
    </h4>
  </header>

  <!--Menü kezdete-->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">
      <img src="/web2/images/kologo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      Könyvörző
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!--Menük betöltése-->
    <?php echo Menu::getMenu($viewData['selectedItems']); ?>

     <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Kezdőoldal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--Menü vége-->

  <div class="container">
    <div class="row">
      <div class="col-md">
        <!-- One of three columns-->
      </div>
      <div class="col-md-12">
        <section> <!--Itt tölti be az oldal tartalmát-->
            <?php include($viewData['render']); ?>
        </section>
      </div>
      <div class="col-md">
        <!--Three of three columns-->
      </div>
    </div>
  </div>

  <!--Bootsrap 4 scriptjei-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

  <footer>&copy; NJE - GAMF - Informatika Tanszék <?= date("Y") ?></footer>
</body>

</html>