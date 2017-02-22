<?php

namespace Installer;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;
use Installer\Interfaces\InstallerInterface;
// use Installer\Interfaces\OperationInterface as Operation;
use Installer\Operation;
use PDOException;
use ReflectionClass;
use ReflectionMethod;
use Symfony\Component\Translation\Exception\InvalidArgumentException;


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
    * Specifies booting from file.
    *
    * @var boolean
    */
    protected $bootFromFile;

    /**
     * Construct
     */
    public function __construct(Manager $manager, $bootFromFile = false, $bootFile = null)
    {
        $this->manager = $manager;
        $this->schema = $manager->getConnection()->getSchemaBuilder();
        $this->bootFromFile = $bootFromFile;

        // generate operations from file, if specified so
        if (isset($this->bootFromFile) && $this->bootFromFile === true) {
            if (! isset($bootFile) || $bootFile === null) {
                throw new InvalidArgumentException("No boot file specified.");
            }

            $this->bootFromFile($bootFile);
        }
    }


    /**
    * Runs the installer.
    *
    * @return boolean
    */
    public function run()
    {
        

        // run each operation
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

        // $this->schema->dropIfExists('categories');

        foreach ($this->operations as $operation) {
            try {
                $operation->reverse();
            } catch (OperationException $e) {
                // $e->getMessage();
                return false;
            }
        }
    }

    /**
    * Clean-up operations. 
    *
    * @return boolean
    */
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

    /**
    * Boot operations from file. 
    *
    * @param string $filename 
    *
    * @return null
    * @throws \InvalidArgumentException
    */
    public function bootFromFile($filename)
    {
        $definitions = require $filename;

        // expected namespace: \Installer\Database
        // TODO: allow for namespace resolution or define a default one

        foreach ($definitions as $name => $class) {
            $method = new ReflectionMethod($class, '__construct');
            $object = new ReflectionClass($class);
            $operation = new Operation($name, $object->newInstanceArgs([$this->schema]));

            // $this->operations[] = $object->newInstanceArgs([$this->schema]); 

            $this->register($operation);
         } 
    }
}
