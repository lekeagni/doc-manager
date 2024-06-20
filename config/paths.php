<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . "functions.php";

if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}

if (!defined('BASE_URL')) {
    define('BASE_URL', getFullDomainUrl() . 'doc-manager/');
}

define('ROOT', dirname(__DIR__));

define('APP_DIR', 'src');

define('APP', ROOT . DS . APP_DIR . DS);

define('CONFIG', ROOT . DS . 'config' . DS);

define('CORE_PATH', ROOT . DS . 'Core' . DS);

// define('MODEL_PATH', APP . 'Model' . DS);

define('ENTITY_PATH', APP . 'Entity' . DS);

define('CONTROLLER_PATH', APP . 'Controller' . DS);

define('VIEW_PATH', APP . 'View' . DS);

define('SERVICE_PATH', APP . 'Service' . DS);

// Assets files
if (!defined('VIEWS')) {
    define('VIEWS', BASE_URL . APP_DIR . '/View/');
}

if (!defined('ASSETS')) {
    define('ASSETS', BASE_URL . 'assets/');
}

if (!defined('VENDORS')) {
    define('VENDORS', BASE_URL . 'vendor' . DS);
}