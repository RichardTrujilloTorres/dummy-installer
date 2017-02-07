<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Creates `menus` table.
 */
class CreateMenusTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('menus', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');

            $table->string('name', 55);
            $table->string('title', 55);
            $table->text('pages');

            $table->dateTime('created');
            $table->integer('createdby');

            $table->dateTime('modified');
            $table->integer('modifiedby');

            $table->tinyInteger('enabled')->default(1);

            $table->char('import_id', 40)->nullable();

            // CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2
        });

        return true;
    }
}
