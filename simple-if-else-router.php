<?php

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');

require_once(ROOT_DIR .'include/header.php');
require_once(ROOT_DIR .'include/meni.php');

$link = $_GET['t'];
if($link=="1") {
require_once(ROOT_DIR .'pages/1.php');
} elseif ($link=="2") {
require_once(ROOT_DIR .'pages/2.php');
}  elseif ($link=="3") {
require_once(ROOT_DIR .'pages/3.php');
}  else  {
echo '<p>404 strana - Jesam ja lepo rekao, medvedima pristup zabranjen</p>';
}

require_once(ROOT_DIR .'include/footer.php');
