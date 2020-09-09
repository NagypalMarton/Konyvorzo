<?php session_start(); ?>
<?php if (file_exists('./logicals/'.$keres['fajl'].'.php')) {
  include("./logicals/{$keres['fajl']}.php");
} ?>
<!DOCTYPE html>
<html lang="hun">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $ablakcim['cim'] . ((isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '') ?></title>
  <link rel="stylesheet" href="./styles/bootstrap-4.5.2-dist/css/bootstrap.min.css" type="text/css">
  <!--Bootsrap-->
  <script src="https://kit.fontawesome.com/90c4d42b46.js" crossorigin="anonymous"></script>
  <!--FontAwesome-->
  <link rel="stylesheet" href="./styles/stilus.css" type="text/css">
  <?php if (file_exists('./styles/'.$keres['fajl'].'.css')) {
    ?>
  <link rel="stylesheet" href="./styles/<?= $keres['fajl'] ?>.css" type="text/css"><?php
  } ?>
</head>

<body>
  <header>
    <h1><?= $fejlec['cim'] ?></h1>
    <?php if (isset($fejlec['motto'])) {
      ?><h4 id="motto"><?= $fejlec['motto'] ?></h4><?php
    } ?>
    <?php /*if(isset($_SESSION['login'])) { ?>Bejlentkezve:
    <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } */ ?>
  </header>

  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
      <img src="/images/kologo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      Könyvörző
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!--Lista kezdete-->
      <ul class="navbar-nav mr-auto">
        <?php foreach ($oldalak as $url => $oldal) {
          ?>
        <?php if (! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) {
            ?>
        <li class="nav-item" <?= (($oldal == $keres) ? ' class="active"' : '') ?>>
          <a class="nav-link active" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
            <?= $oldal['szoveg'] ?></a>
        </li>
        <?php
          } ?>
        <?php
        } ?>
        <!--Legördülő menű-->

        <?php foreach ($extrak as $url => $oldal) { ?>
        <?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
        <li class="nav-item dropdown" <?= (($oldal == $keres) ? ' class="active"' : '') ?>>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            ÚJ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>"><?= $oldal['szoveg'] ?></a>
          </div>
        </li>
        <?php } ?>
        <?php } ?>
        <!--Legördülő menű vége-->

      </ul>
      <!--Lista vége-->
      
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Keresés az oldalon" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Keresés</button>
      </form>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md">
        <!-- One of three columns-->
      </div>
      <div class="col-md-12">
        <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </div>
    <div class="col-md">
      <!--Three of three columns-->
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"></script>
    <footer>
      <div class="container">

        <div class="row">
          <div class="col-md-1">
            <!--1 of 3-->
          </div>
          <div class="col-md-12">
            <?php if (isset($lablec['copyright'])) {

            ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php

          } ?>
            &nbsp;
            <?php if (isset($lablec['ceg'])) {
            ?><?= $lablec['ceg']; ?><?php
          } ?>
          </div>
          <div class="col-md-1">
            <!--3 of 3-->
          </div>
        </div>
      </div>
    </footer>
</body>

</html>