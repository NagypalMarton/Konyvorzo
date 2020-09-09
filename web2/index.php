<?php

//alkalmazás gyökér könyvtára a szerveren
define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'].'/web2/');

//URL cím az alkalmazás gyökeréhez
define('SITE_ROOT', 'http://localhost/web2/');

// a router.php vezérlő betőltése
require_once(SERVER_ROOT . 'controllers/' . 'router.php');

?>