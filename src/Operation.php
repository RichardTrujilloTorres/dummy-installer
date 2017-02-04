<?php

namespace Installer;

use Installer\Exceptions\OperationException;
use Installer\Interfaces\OperationInterface;


/**
 * Represents an operation to be perform on installation time. 
 */
class Operation implements OperationInterface
{
	/**
	* Reference name.
	*
	* @var string
	*/
	protected $name;

	/**
	* The task to be performed.
	*
	* @var callable
	*/
	protected $task;

	/**
	* The reverse/undo task to be performed.
	*
	* @var callable
	*/
	protected $reverse;

	/**
	* The operation status (complete/incomplete/in-hold)
	*
	* @var integer
	*/
	protected $status;


    /**
     * Constructor
     */
    public function __construct($name, $task, $reverse = null)
    {
    	if (! is_callable($task)) {
    		throw new OperationException('The task must be a callable.');
    	}

    	if (! is_null($reverse) && ! is_callable($reverse)) {
    		throw new OperationException('The reverse task must be a callable.');
    	}


		$this->name = $name;
		$this->task = $task;
		$this->reverse = $reverse;
    }

    /**
    * Runs the operation. 
    *
    * @param boolean $force Attempt to force the operation. 
    *
    * @return boolean
    */
    public function run($force = false)
    {
    	return call_user_func($this->task);
    }

    /**
     * Gets the The operation status (complete/incomplete/in-hold).
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the The operation status (complete/incomplete/in-hold).
     *
     * @param integer $status the status
     *
     * @return self
     */
    protected function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    protected function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of task.
     *
     * @return callable
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Sets the value of task.
     *
     * @param mixed $task the task
     *
     * @return self
     */
    protected function setTask($task)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * Gets the value of reverse.
     *
     * @return mixed
     */
    public function getReverse()
    {
        return $this->reverse;
    }

    /**
     * Sets the value of reverse.
     *
     * @param mixed $reverse the reverse
     *
     * @return self
     */
    protected function setReverse($reverse)
    {
        $this->reverse = $reverse;

        return $this;
    }
}
