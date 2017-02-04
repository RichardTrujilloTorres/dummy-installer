<?php

use Illuminate\Database\Query\Builder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Installer\Installer;
use Installer\Operation;


require __DIR__.'/../bootstrap/setup.php';

// $query = 'CREATE TABLE user(id INT(11) AUTO INCREMENT PRIMARY KEY);';
// $builder = new Builder($capsule->getConnection());



$installer = new Installer($capsule);

$operation = new Operation(
	'create_categories_table',
	function() {
		echo 'create categories goes here...';
		return true;
	});

dd($operation);


$installer->register($operation);




// $installer->run();