<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Creates `modules` table.
 */
class CreateModulesTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('modules', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');

            $table->string('name', 55)->unique();
            $table->string('title', 55);

            $table->string('version', 25)->nullable();
            $table->string('description')->nullable();

            $table->tinyInteger('default_module')->default(0);
            $table->tinyInteger('manager')->default(0);
            $table->tinyInteger('enabled')->default(1);

            // CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=233
        });

        return true;
    }
}
