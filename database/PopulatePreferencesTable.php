<?php

namespace Database;


use Database\Models\Preference;
use Illuminate\Database\Schema\Blueprint;

/**
 * Populates `preferences` table.
 */
class PopulatePreferencesTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        Preference::create([
            'name' => 'force_php_errors_and_warnings',
            'value' => 'no',
        ]);

        Preference::create([
            'name' => 'routing',
            'value' => 'default',
        ]);

        // TODO
// (5, 'website_title', '#mappiamo'),
// (6, 'website_description', 'mappiamo.org'),
// (7, 'website_email', 'info@mappiamo.com'),
// (8, 'new_user_default_group', '3'),
// (9, 'facebook_app_id', '488785261198856'),
// (10, 'facebook_secret', '2f8e52496f1efdce948de72383814d4c'),
// (11, 'registration', 'yes'),
// (12, 'default_language', 'it'),
// (13, 'domain', 'mappiamo.org'),
// (14, 'website_name', '#mappiamo demo'),
// (15, 'location', 'Tricase'),
// (16, 'DefaultLatitude', '39.93042'),
// (17, 'DefaultLongitude', '18.355332'),
// (18, 'flickr_apikey', 'a868bb5f7da2815b93ab063fa6f04c36'),
// (19, 'flickr_bbox', '17.832308, 39.743896,18.580752, 40.450872'),
// (20, 'flickr_numofpics', '250'),
// (21, 'DisqusName', ''),
// (22, 'Reacaptcha_key', '');

        return true;
    }
}
