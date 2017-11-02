<?php
require_once("vendor/autoload.php");

include "vendor/ccampbell/chromephp/ChromePhp.php";

ChromePhp::log('Hello console!');
ChromePhp::log($_SERVER);
ChromePhp::warn('something went wrong!');
