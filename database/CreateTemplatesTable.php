<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Creates `templates` table.
 */
class CreateTemplatesTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('templates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');

            $table->string('name', 55)->unique();
            $table->string('title', 55);
            $table->string('version', 25);
            $table->string('description', 255);

            $table->tinyInteger('default_template')->default(0);
            $table->tinyInteger('manager')->default(0);
            $table->tinyInteger('enabled')->default(0);

            

            //  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=212
        });

        return true;
    }
}
