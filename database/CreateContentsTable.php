<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Creates `contents` table.
 */
class CreateContentsTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('contents', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');

            $table->string('type', 15);
            $table->string('title', 55);
            $table->string('name', 55);
            $table->string('address', 555);

            $table->double('lat')->default(0);
            $table->double('lng')->default(0);


            // SQLSTATE[42000]: Syntax error or access violation: 1067 Invalid default value for 'license'
            // --for both: '1' and 1 as default
            // $table->integer('license', 11)->default(1);

            // SQLSTATE[42000]: Syntax error or access violation: 1075 Incorrect table definition; there can be only one auto column and it must be defined as a key in ...
            // $table->integer('license', 11);

            $table->integer('license');

            $table->longText('text')->nullable();
            $table->text('url')->nullable();

            $table->datetime('start')->nullable();
            $table->datetime('end')->nullable();

            // $table->datetime('created');

            // Same for each 11-length int
            // $table->integer('createdby', 11);

            // $table->datetime('modified');
            // $table->integer('modifiedby', 11);

            // $table->integer('hits', 11);

            $table->integer('createdby');

            $table->datetime('modified');
            $table->integer('modifiedby');

            $table->integer('hits');

            // Same error here for any default value and length.
            // $table->tinyInteger('translation', 1)->default(0);
            $table->tinyInteger('translation');
            $table->tinyInteger('enabled');
            $table->string('language', 5)->default('it');

            // $table->integer('parent')->nullable();

            // SQLSTATE[42000]: Syntax error or access violation: 1075 Incorrect table definition; there can be only one auto column and it must be defined as a key in ...
            $table->char('import_id', 40)->nullable();
            // $table->char('import_id', 40)->index();

            $table->mediumText('route');

            // ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5
        });

  



        return true;
    }
}
