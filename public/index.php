<?php



use Database\Models\Category;
use Database\Models\Content;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Installer\Installer;
use Installer\Operation;

require __DIR__.'/../bootstrap/setup.php';


/**
* Create and populate all tables.
*/
$schema = $capsule->getConnection()->getSchemaBuilder();
$installer = new Installer($capsule, true, __DIR__.'/../database/operations.php');



$result = $installer->run();

// dd($result);










$category = new Category;
dd($category->all());