<?php

namespace Database;


use Database\Models\Template;
use Illuminate\Database\Schema\Blueprint;

/**
 * Populates `templates` table.
 */
class PopulateTemplatesTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        Template::create([
            'name' => 'mappiamo',
            'title' => 'Mappiamo',
            'version' => '0.0.6',
            'description' => 'Mappiamo template',
            'default_template' => 1,
            'manager' => 0,
            'enabled' => 1,
        ]);

        Template::create([
            'name' => 'manager',
            'title' => 'Manager',
            'version' => '0.0.6',
            'description' => 'Manager template',
            'default_template' => 0,
            'manager' => 1,
            'enabled' => 1,
        ]);

        return true;
    }
}
