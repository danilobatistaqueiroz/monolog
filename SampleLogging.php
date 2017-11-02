<?php
require_once("vendor/autoload.php");


use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

$debug = new StreamHandler(__DIR__.'/logs/infos.log', Logger::DEBUG);
$warnings = new StreamHandler(getcwd().'/logs/problems.log', Logger::WARNING);
$firephp = new FirePHPHandler();

$logger = new Logger('problems');
$logger->pushHandler($warnings);
$logger->pushHandler($firephp);

$logger->addWarning('It seems there are problems');
$logger->addError('You just got a problem');
$logger->debug('For your sake, it can help you');
$logger->addCritical('Problaby something wrong with the application structure');
$logger->addInfo('Starting everything well');
$logger->addNotice('A great number of visitors now');
$logger->addAlert('The memory is almost full');


$logger = new Logger('debug');
$logger->pushHandler($debug);

$logger->addWarning('It seems there are problems');
$logger->addError('You just got a problem');
$logger->debug('For your sake, it can help you');
$logger->addCritical('Problaby something wrong with the application structure');
$logger->addInfo('Starting everything well');
$logger->addNotice('A great number of visitors now');
$logger->addAlert('The memory is almost full');

$console = new StreamHandler('php://stderr', Monolog\Logger::DEBUG);
$logger->pushHandler($console);
$logger->debug('For your sake, it can help you');

