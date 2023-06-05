<?php

use esas\cmsgate\buynow\controllers\admin\AdminControllerBuyNow;
use esas\cmsgate\buynow\controllers\client\ClientControllerBuyNow;
use esas\cmsgate\hutkigrosh\controllers\ControllerHutkigroshNotify;
use esas\cmsgate\utils\Logger as LoggerCms;

require_once((dirname(__FILE__)) . '/src/init.php');

$request = $_SERVER['REDIRECT_URL'];

$logger = LoggerCms::getLogger('index');
if (strpos($request, 'admin') !== false) {
    $controller = new AdminControllerBuyNow();
    $controller->process();
} elseif (strpos($request, 'callback') !== false) {
    $controller = new ControllerHutkigroshNotify();
    $controller->process();
} else {
    $controller = new ClientControllerBuyNow();
    $controller->process();
}
