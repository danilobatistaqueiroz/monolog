# Working With Monolog

** Installation **

Install the latest version with

`$ composer require monolog/monolog`


download predis inside root folder:

`git clone git://github.com/nrk/predis.git`


create the *logs* folder


___


** Basic Usage **

```php
<?php
require_once("vendor/autoload.php");

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$debug = new StreamHandler(getcwd().'/logs/outdebug.log', Logger::DEBUG);

$logger = new Logger('debug');
$logger->pushHandler($debug);

$logger->addWarning('It seems there are problems');
$logger->addError('You just got a problem');
$logger->debug('For your sake, it can help you');
$logger->addCritical('Problaby something wrong with the application structure');
$logger->addInfo('Starting everything well');
$logger->addNotice('A great number of visitors now');
$logger->addAlert('The memory is almost full');
```


___


** Using ChromePhp **

This library allows you to log variables to the Chrome console.

** Installation **

Install the Chrome extension from: https://chrome.google.com/extensions/detail/noaneddfkdjfnfdakjjmocngnfkfehhd

Click the extension icon in the browser to enable it for the current tab's domain

Install  ChromePhp using Composer

`composer require ccampbell/chromephp`

Log some data

```php
ChromePhp::log('Hello console!');
ChromePhp::log($_SERVER);
ChromePhp::warn('something went wrong!');
```

Open the Chrome Inspect: 

** Cntrl + Shift + I **

or

** F12 **

Look into ** Console ** Tab


![ChromePhp](https://4.bp.blogspot.com/-6fd1_ArdrwA/WfqHmYyhgbI/AAAAAAAAAXU/kiWJMFljjSsciSiQT1-aszDsUX4Tqb7twCLcBGAs/s320/phpFireBug.PNG)


___

** Redis Logs **

add a RedisHandler

create a new Predis\Client

start a Redis Server

open the redis client and digit:

`LRANGE redislog 0 -1`

![RedisCli](https://2.bp.blogspot.com/-CToFO7Txqhk/WfqORns7nrI/AAAAAAAAAXw/pYnXHz3FAqsQYRUdDXH9WUQBw1hmm7xYQCLcBGAs/s320/RedisLog.PNG)

