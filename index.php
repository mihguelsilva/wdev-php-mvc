<?php

define("DS", DIRECTORY_SEPARATOR);

require __DIR__ . DS . "vendor" . DS . "autoload.php";

use \App\Controller\Pages\Home;

echo Home::getHome();
?>
