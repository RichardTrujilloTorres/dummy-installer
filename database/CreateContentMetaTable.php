<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Creates `content_meta` table.
 */
class CreateContentMetaTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('content_meta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            // $table->integer('external_id')->index('external_id', 'content_id')->unsigned();
            $table->integer('external_id')->unsigned();

            $table->string('name');
            $table->string('value', 20000);

            $table->char('import_id', 40)->nullable();


            $table->index('external_id', 'content_id');

            // ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
        });


        return true;
    }
}
