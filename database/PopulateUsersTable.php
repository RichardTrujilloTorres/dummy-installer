<?php

namespace Database;


use Carbon\Carbon;
use Database\Models\User;
use Illuminate\Database\Schema\Blueprint;

/**
 * Populates `users` table.
 */
class PopulateUsersTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        User::create([
            'group_id' => 100,
            'username' => 'mappiamo',
            'password' => '23a304827dd47c13ec8523bb58699fd5',
            'email' => '',
            'name' => '',
            // 'created' => new Carbon('0000-00-00 00:00:00'), // error

            'createdby' => 0,
            // 'modified' => new Carbon('0000-00-00 00:00:00'), // error
            'modifiedby' => 0,
            'lastlogin' => 'bWFwcGlhbW8gc1FHVmVWMzUhUWhrXlAlc3huViNSQ2M3|MjAxNC0wMi0xNSAxNTozNjo0Ng==|TW96aWxsYS81LjAgKE1hY2ludG9zaDsgSW50ZWwgTWFjIE9TIFggMTBfOV8xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvMzIuMC4xNzAwLjEwNyBTYWZhcmkvNTM3LjM2',
            'activation' => null,
            'enabled' => 0,
            'import_id' => 'f9996909-cb40-11e5-8e2c-1c6f65ad55b6',
        ]);

        User::create([
            'group_id' => 1,
            'username' => 'demo',
            'password' => 'c4aadc5a85db61399dbb70f187c2ceda',
            'email' => 'info@mappiamo.com',
            'name' => '#mappiamo',
            'created' => new Carbon('2014-02-02 12:11:26'),
            'createdby' => 1001,
            'modified' => new Carbon('2014-02-02 12:11:26'),
            'modifiedby' => 1001,
            'lastlogin' => 'ZGVtbyB3SzA3d0trbFVhSFBoJWNrWEYyMSRSb1E=|MjAxNi0wNS0wOSAxNzo1MzoxOQ==|TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXaW42NDsgeDY0OyBydjo0NC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzQ0LjA=',
            'activation' => null,
            'enabled' => 1,
            'import_id' => 'f9998230-cb40-11e5-8e2c-1c6f65ad55b6',
        ]); 


        return true;
    }
}
