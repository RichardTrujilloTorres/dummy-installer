<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Creates `licenses` table.
 */
class CreateLicensesTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('licenses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');

            $table->string('title', 55);
            $table->longText('description');

            $table->text('url');
            $table->tinyInteger('enabled')->default(1);

            // CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6
        });

        return true;
    }
}
