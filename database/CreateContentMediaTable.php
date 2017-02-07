<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Creates `content_media` table.
 */
class CreateContentMediaTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('content_media', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->integer('external_id')->index()->unsigned();

            $table->string('title')->nullable();
            $table->text('url');
            $table->tinyInteger('default_media')->default(0);
            $table->char('import_id', 40);

            // ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
            
        });


        return true;
    }
}
