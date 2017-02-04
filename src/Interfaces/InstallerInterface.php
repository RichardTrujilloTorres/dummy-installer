<?php

namespace Installer\Interfaces;

use Illuminate\Database\Capsule\Manager;


interface InstallerInterface {

	/**
    * Runs the installer. 
    *
    * @return boolean
    */
	public function run();
	
}