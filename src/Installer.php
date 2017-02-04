<?php

namespace Installer;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Installer\Interfaces\InstallerInterface;


/**
 * Installer
 */
class Installer implements InstallerInterface
{
	protected $manager;

	protected $schema;

    /**
     * Construct
     */
    public function __construct(Manager $manager)
    {   
		$this->manager = $manager;
		$this->schema = $manager->getConnection()->getSchemaBuilder();
    }

    /**
    * Creates database table.  
    *
    * @param Table $table 
    *
    * @return boolean
    */
    public function create()
    {
    	dd($this->manager);
    }

    /**
    * Runs the installer. 
    *
    * @return boolean
    */
    public function run()
    {
		// $this->schema->create('categories', function(Blueprint $table) {

		// 	$table->increments('id');
		// 	$table->string('name')->unique();
		// 	$table->string('title');
		// 	$table->text('contents');
		// 	$table->integer('flagship')->default(0);

		// 	$table->dateTime('created');
		// 	$table->integer('createdby'); // TODO: change this name.

		// 	$table->dateTime('modified');
		// 	$table->integer('modifiedby');

		// 	$table->smallInteger('enabled')->default(1);

		// 	$table->string('import_id', 40);
			

		// 	// It should have something simpler.
		// 	// $table->timestamps();

		// 	// ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2

		// });


		// All good.
    	return true;
    }

    /**
    * Register an operation to be perform on installation time. 
    *
    * @param Operation $operation 
    *
    * @return type
    */
    public function register(Operation $operation)
    // public function register()
    {
    	
    }

    /**
    * Reverses all installation procedures. 
    *
    * @param boolean $force 
    *
    * @return boolean
    */
    protected function reverse($force = false)
    {
    	$this->schema->dropIfExists('categories');
    }

    protected function clean()
    {
    	
    }

    /**
     * Gets the value of schema.
     *
     * @return mixed
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Sets the value of schema.
     *
     * @param mixed $schema the schema
     *
     * @return self
     */
    protected function setSchema($schema)
    {
    	// TODO: $schema type-hinting 
        $this->schema = $schema;

        return $this;
    }
}
