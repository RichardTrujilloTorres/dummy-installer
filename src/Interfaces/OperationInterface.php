<?php

namespace Installer\Interfaces;


interface OperationInterface {

	/**
    * Runs the operation. 
    *
    * @param boolean $force Attempt to force the operation. 
    *
    * @return boolean
    */
	public function run($force);

	/**
     * Gets the value of task.
     *
     * @return callable
     */
	public function getTask();	

	/**
     * Gets the The operation status (complete/incomplete/in-hold).
     *
     * @return integer
     */
    public function getStatus();
}