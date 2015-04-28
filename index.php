<?php


// Create connection
// TODO connect to MYSQL DB
// $link = mysql_connect('localhost', 'root', 'Scott!92');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// echo 'Connected successfully';
// mysql_close($link);

//phpinfo();
date_default_timezone_set('Africa/Lagos');

// change the following paths if necessary
$yii_dirname = "yii-1.1.16.bca042";

$yii=dirname(__FILE__).'/../'.$yii_dirname.'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();

?> 