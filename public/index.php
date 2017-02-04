<?php

use Database\CreateCategoriesTable;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Installer\Installer;
use Installer\Operation;


require __DIR__.'/../bootstrap/setup.php';

// $query = 'CREATE TABLE user(id INT(11) AUTO INCREMENT PRIMARY KEY);';
// $builder = new Builder($capsule->getConnection());



$installer = new Installer($capsule);

$schema = $capsule->getConnection()->getSchemaBuilder();


// operations
// return [
// 	// w/ callable specified
// 	'create_categories_table' => CreateCategoriesTable::class, 

// ];

// try 
$create = new Operation(
	'create_categories_table', 
	new CreateCategoriesTable($schema));

// TODO: add CreateCategoriesTable::class support


// dd($operation);

$installer->register($create);
// $installer->register($operation);
// dd($installer->getOperations());


$result = $installer->run();

dd($result);



// $operation->run(); // runs the operation
// $installer->next()->run();// runs next operation



// $installer->run();






$operation = new Operation(
	'create_categories_table',
	function() use ($schema) {
		$schema->create('categories', function(Blueprint $table) {

			$table->increments('id');
			$table->string('name')->unique();
			$table->string('title');
			$table->text('contents');
			$table->integer('flagship')->default(0);

			$table->dateTime('created');
			$table->integer('createdby'); // TODO: change this name.

			$table->dateTime('modified');
			$table->integer('modifiedby');

			$table->smallInteger('enabled')->default(1);

			$table->string('import_id', 40);
			

			// It should have something simpler.
			// $table->timestamps();

			// ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2

		});
	});

// dd($operation);