<?php

namespace Database;

use Database\Models\UserGroup;
use Illuminate\Database\Schema\Blueprint;

/**
 * Populates `user_groups` table.
 */
class PopulateUserGroupsTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        UserGroup::create([
            'name' => 'admin',
            'title' => 'Admin',
        ]);

        UserGroup::create([
            'name' => 'editor',
            'title' => 'Editor',
        ]);

        UserGroup::create([
            'name' => 'collaborator',
            'title' => 'Collaborator',
        ]);

        UserGroup::create([
            'name' => 'viewer',
            'title' => 'viewer',
        ]);

        

        return true;
    }
}
