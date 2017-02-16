<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Creates `widgets` table.
 */
class CreateWidgetsTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('widgets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');

            $table->string('name', 55)->unique();
            $table->string('title', 55);
            $table->string('version', 55)->nullable();
            $table->string('description', 255)->nullable();

            $table->tinyInteger('manager')->default(0);
            $table->tinyInteger('enabled')->default(1);

            //  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51
        });
        
        return true;
    }
}
