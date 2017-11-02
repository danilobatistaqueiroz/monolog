<?php
require_once("vendor/autoload.php");

require 'predis/autoload.php';
Predis\Autoloader::register();

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\RedisHandler;

$redis = new Predis\Client("tcp://localhost:6379");

$warnings = new RedisHandler($redis, "redislog", "prod");

$logger = new Logger('caution');
$logger->pushHandler($warnings);

//$logger->addWarning('It seems there are problems');
//$logger->addError('You just got a problem');
$logger->debug('For your sake, it can help you');
//$logger->addCritical('Problaby something wrong with the application structure');
$logger->addInfo('Starting everything well');
//$logger->addNotice('A great number of visitors now');
//$logger->addAlert('The memory is almost full');



try {
	$value = $redis->lrange('redislog',0,-1);
	//print(json_encode($value));
    print(implode("<BR/> ", $value));
}
catch (Exception $e) {
	die($e->getMessage());
}