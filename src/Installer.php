<?php

namespace Installer;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;
use Installer\Interfaces\InstallerInterface;
use Installer\Interfaces\OperationInterface as Operation;
use PDOException;


/**
 * Installer
 */
class Installer implements InstallerInterface
{
	/**
	* Database manager.
	*
	* @var Illuminate\Database\Capsule\Manager
	*/
	protected $manager;

	/**
	* Database Schema
	*
	* @var Illuminate\Database\Schema\Builder
	*/
	protected $schema;

	/**
	* All the operations to be run.
	*
	* @var array
	*/
	protected $operations;

    /**
     * Construct
     */
    public function __construct(Manager $manager)
    {   
		$this->manager = $manager;
		$this->schema = $manager->getConnection()->getSchemaBuilder();
    }


    /**
    * Runs the installer. 
    *
    * @return boolean
    */
    public function run()
    {
    	foreach ($this->operations as $operation) {
    		try {
    			$operation->run();
    		} catch (OperationException $e) {
    			// $e->getMessage();
    			return false;
    		}
    		// table already exist exception
    		// } catch (PDOException $e) {
    		// 	// handle msg
    		// 	return false;
    		// } 
    		
    	}

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
    {
    	$this->operations[] = $operation;
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

    /**
     * Gets the All the operations to be run.
     *
     * @return array
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Sets the All the operations to be run.
     *
     * @param array $operations the operations
     *
     * @return self
     */
    protected function setOperations(array $operations)
    {
        $this->operations = $operations;

        return $this;
    }
}
