<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Populates `preferences` table.
 */
class CreatePreferencesTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('preferences', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');

            $table->string('name', 255)->unique();
            $table->text('value');

            // CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=233
            // DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 
        });

        return true;
    }
}
