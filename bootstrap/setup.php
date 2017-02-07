<?php

use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;

/**
* General
*/
error_reporting(E_ALL);
ini_set('display_errors', '1');
date_default_timezone_set('UTC');


/**
* Session
*/
session_start();
session_cache_limiter(false);

/**
* Autoloading
*/
require __DIR__.'/../vendor/autoload.php';



/**
* Environment
*/

$dotenv = new Dotenv(__DIR__.'/../');
$dotenv->load();


/**
 * Database
 */
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => getenv('DB_CONNECTION'),
    'host' => getenv('DB_HOST'),
    'database' => getenv('DB_DATABASE'),
    'username' => getenv('DB_USERNAME'),
    'password' =>getenv('DB_PASSWORD'),
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
    ]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
