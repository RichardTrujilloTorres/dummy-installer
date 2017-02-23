<?php

namespace Database;

use Database\Models\Category;
use Database\Models\License;
use Illuminate\Database\Schema\Blueprint;

/**
 * Populates `licenses` table.
 */
class PopulateLicensesTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        // License::create([
        //     'title' => 'Copyright',
        //     'description' => 'Copyrighted content.',
        //     'url' => '',
        //     'enabled' => 1,
        // ]);

        License::create([
            'title' => 'ODbL',
            'description' => '',
            'url' => 'http://opendatacommons.org/licenses/odbl/',
            'enabled' => 1,
        ]);

        License::create([
            'title' => 'CC-BY-SA',
            'description' => '.',
            'url' => 'https://creativecommons.org/publicdomain/zero/1.0/',
            'enabled' => 1,
        ]);

        License::create([
            'title' => 'IODL v2.0',
            'description' => '',
            'url' => 'http://www.dati.gov.it/iodl/2.0/',
            'enabled' => 1,
        ]);

        return true;
    }
}
