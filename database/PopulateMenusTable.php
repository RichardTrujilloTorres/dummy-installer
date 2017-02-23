<?php

namespace Database;

use Database\Models\Menu;
use Illuminate\Database\Schema\Blueprint;

/**
 * Populates `menus` table.
 */
class PopulateMenusTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        Menu::create([
            'name' => 'demo-menu',
            'title' => 'Demo menu',
            'pages' => '{1}',
            'created' => '2016-02-04 13:59:39',
            'createdby' =>  27,
            'modified' => '2016-02-04 14:20:04',
            'modifiedby' => 27,
            'enabled' => 1,
            'import_id' => 'f998383e-cb40-11e5-8e2c-1c6f65ad55b6',
        ]);

        return true;
    }
}
