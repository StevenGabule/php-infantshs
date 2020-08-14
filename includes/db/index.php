<?php
define('HOST_', 'localhost');
define('USERNAME_', 'root');
define('PASSWORD_', '');
define('DATABASE_', 'ijbs');
$connect = new PDO("mysql:host=".HOST_.";dbname=".DATABASE_, USERNAME_, PASSWORD_);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
