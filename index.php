<?php
ini_set("session.cookie_lifetime","20");
ini_set("session.gc_maxlifetime","20");
date_default_timezone_set('America/Caracas');
define('DS', DIRECTORY_SEPARATOR);
define('HostRoot', realpath('..') . DS);
define('WebRoot', realpath(dirname(__FILE__)) . DS);
require_once WebRoot . 'core' . DS . 'autoload.php';
try {
    CSession::init();
    new CBoot(new CRequest);
} catch (Exception $e) {
    echo $e->getMessage();
}
