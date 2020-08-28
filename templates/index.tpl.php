<?php session_start(); ?>
<?/*"php" if (file_exists('./logicals/'.$keres['fajl'].'.php')) {
  include("./logicals/{$keres['fajl']}.php");
}*/ ?>
<!DOCTYPE html>
<html lang="hun">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $ablakcim['cim'] . ((isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '') ?></title>
  <!--<link rel="stylesheet" href="./styles/stilus.css" type="text/css">-->
  <link rel="stylesheet" href="./styles/bootstrap-4.5.2-dist/css/bootstrap.min.css" type="text/css">
  <?php if (file_exists('./styles/'.$keres['fajl'].'.css')) {
    ?><link rel="stylesheet" href="./styles/<?= $keres['fajl'] ?>.css" type="text/css"><?php
  } ?>
</head>
<body>
  <header>
    <h1><?= $fejlec['cim'] ?></h1>
    <?php if (isset($fejlec['motto'])) {
      ?><h4><?= $fejlec['motto'] ?></h><?php
    } ?>
    <?php /*if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } */ ?>
  </header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
     <!-- <li class="nav-item dropdown">
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
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

  <!--<div>
    <aside class="felsomenu">
      <nav>
        <ul>
          <?php foreach ($oldalak as $url => $oldal) {
            ?>
            <?php if (! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) {
              ?>
              <li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
                <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                  <?= $oldal['szoveg'] ?></a>
              </li>
              <?php
            }?>
            <?php
          } ?>
        </ul>
      </nav>
    </aside>-->
    <div id="notfelsomenu" class="container">
    <div class="row">
    <div class="col-sm">
     <!-- One of three columns-->
    </div>
    <div class="col-11">
    <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </div>
    <div class="col-sm">
      <!--Three of three columns-->
    </div>
    </div>
  </div>
  <footer>
    <?php if (isset($lablec['copyright'])) {
      ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php
    } ?>
    &nbsp;
    <?php if (isset($lablec['ceg'])) {
      ?><?= $lablec['ceg']; ?><?php
    } ?>
  </footer>
</body>
</html>