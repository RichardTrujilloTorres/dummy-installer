<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;



/**
 * Populates `categories` table.
 */
class PopulateCategoriesTable extends TableOperation
{
    /**
    * Object callable. 
    *
    * @return boolean
    */
    public function __invoke()
    {
    	// $this->schema->create('contents', function(Blueprint $table) {

            
     //    });


    	return true;
    }
}