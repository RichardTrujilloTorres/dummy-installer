<?php

namespace Database;


use Database\Models\Page;
use Illuminate\Database\Schema\Blueprint;

/**
 * Populates `pages` table.
 */
class PopulatePagesTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        Page::create([
            'name' => 'sample-category',
            'title' => 'Sample category',
            'type' => 'url',
            'url' => 'index.php?module=category&object=1',
            'blank' => 0,
            'created' => '2016-02-04 13:59:18',
            'createdby' => 27,
            'modified' => '2016-02-04 15:56:55',
            'modifiedby' => 27,
            'enabled' => 1,
            'import_id' => 'f997a76a-cb40-11e5-8e2c-1c6f65ad55b6',
            'parent_id' => null,
        ]);

        return true;
    }
}
