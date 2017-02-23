<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Creates `pages` table.
 */
class CreatePagesTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('pages', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');

            $table->string('name', 55)->unique();
            $table->string('title', 55);
            $table->string('type', 25); // CHARACTER SET ucs2 COLLATE ucs2_unicode_ci

             // Uncaught PDOException: SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'url' at row 1            
            // $table->string('url', 25); 
            $table->string('url');

            $table->tinyInteger('blank')->default(0);

            $table->dateTime('created');
            $table->integer('createdby');

            $table->dateTime('modified');
            $table->integer('modifiedby');

            $table->tinyInteger('enabled')->default(1);

            $table->char('import_id', 40)->nullable();
            $table->char('parent_id', 255)->nullable();


            // CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2
        });


        return true;
    }
}
