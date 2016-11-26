<?php

//  http://www.redbeanphp.com/index.php?p=/connection
//  http://www.redbeanphp.com/index.php?p=/crud
require 'rb.php';
define('DB_HOST', 'localhost');
define('DB_NAME', 'vvdb');
define('DB_USER', 'vvdb');
define('DB_PWD', 'Showmethe$888');

R::setup( 'mysql:host='.DB_HOST.';dbname='. DB_NAME,
      DB_USER, DB_PWD); //for both mysql or mariaDB



 ?>
