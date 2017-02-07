<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Creates `categories` table.
 */
class CreateCategoriesTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('title');
            $table->text('contents');
            $table->integer('flagship')->default(0);

            $table->dateTime('created');
            $table->integer('createdby'); // TODO: change this name.

            $table->dateTime('modified');
            $table->integer('modifiedby');

            $table->smallInteger('enabled')->default(1);

            $table->string('import_id', 40);
            

            // It should have something simpler.
            // $table->timestamps();

            // ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2
        });

        return true;
    }
}
