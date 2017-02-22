<?php

use Database\CreateCategoriesTable;
use Database\CreateContentMediaTable;
use Database\CreateContentMetaTable;
use Database\CreateContentsTable;
use Database\CreateLicensesTable;
use Database\CreateMenusTable;
use Database\CreateModulesTable;
use Database\CreatePagesTable;
use Database\CreatePreferencesTable;
use Database\CreateTemplatesTable;
use Database\CreateUserGroupsTable;
use Database\CreateUsersTable;
use Database\CreateWidgetsTable;
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

dd($result);


