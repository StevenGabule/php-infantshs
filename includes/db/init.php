<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Manila');
$webroot = 'D:laragon/www';
define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', $webroot.DS.'php-infantshs');
define('INCLUDES_PATH', SITE_ROOT.DS.'includes');
require_once(INCLUDES_PATH.DS. 'Helpers'.DS.'index.php');
require_once(INCLUDES_PATH.DS. 'db'.DS.'index.php');
require_once(INCLUDES_PATH.DS. 'db'.DS.'Users.php');
