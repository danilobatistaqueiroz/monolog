<?php
require_once("vendor/autoload.php");


use Monolog\Logger;

use Monolog\Handler\BrowserConsoleHandler;


$browserHandler = new BrowserConsoleHandler(Logger::DEBUG);

$logger = new Logger('log');
$logger->pushHandler($browserHandler);

$logger->addWarning('It seems there are problems');
$logger->debug('For your sake, it can help you');
