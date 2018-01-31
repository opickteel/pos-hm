<?php
require_once __DIR__ . '/autoloader.php';

use lib\MVC\Router;

$kernel = new  Router($_GET);
$controller = $kernel->getController();
$controller->executeAction();
 ?>
