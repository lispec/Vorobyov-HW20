<?php

// 1 подключаем файлы
require_once 'components/Router.php';
require_once 'components/UserSession.php';
require_once 'controllers/BaseController.php';
require_once 'components/Pagination.php';

require_once 'models/Picture.php';
require_once 'models/FileDB.php';
require_once 'models/MySQLDB.php';

// 2 подключаем БД
$mysqlConf = require_once 'mysql.php';
MySQLDB::init($mysqlConf['dbName'], $mysqlConf['host'], $mysqlConf['user'], $mysqlConf['password']);


// 3 подключаем маршрутизатор
$router = new Router($_SERVER['REQUEST_URI']);

if(!$router->handle()) {
    echo 'Path not found.';
}