<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Creates `users` table.
 */
class CreateUsersTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');

            $table->integer('group_id');

            $table->char('username', 55)->unique();
            $table->char('password', 255);
            $table->char('email', 255);
            $table->char('name', 255);

            $table->dateTime('created');
            $table->integer('createdby');

            $table->dateTime('modified');
            $table->integer('modifiedby');

            $table->text('lastlogin')->nullable();
            $table->text('activation')->nullable(); // ucs2 COLLATE ucs2_unicode_ci

            $table->tinyInteger('enabled');

            $table->char('import_id', 40)->nullable();

            //  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28
        });

        return true;
    }
}
