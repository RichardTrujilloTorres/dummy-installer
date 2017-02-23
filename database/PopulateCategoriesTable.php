<?php

namespace Database;

use Database\Models\Category;
use Illuminate\Database\Schema\Blueprint;

/**
 * Populates `categories` table.
 */
class PopulateCategoriesTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        Category::create([
            'name' => 'sample-category',
            'title' => 'Sample Category',
            'contents' => '{1};{3};{2};{4}',
            'flagship' => 0,
            'created' => '2016-02-04 13:58:28',
            'createdby' => 27,
            'modified' => '2016-02-04 15:53:58',
            'modifiedby' => 27,
            'enabled' => 1,
            'import_id' => 'f996dd7b-cb40-11e5-8e2c-1c6f65ad55b6',
        ]);

        return true;
    }
}
