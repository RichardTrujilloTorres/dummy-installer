<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Creates `user_groups` table.
 */
class CreateUserGroupsTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        $this->schema->create('user_groups', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');

            $table->string('name', 55)->unique();
            $table->string('title', 55);

            //   DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5
        });

        return true;
    }
}
