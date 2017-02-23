<?php

namespace Database;


use Database\Models\Module;
use Illuminate\Database\Schema\Blueprint;

/**
 * Populates `modules` table.
 */
class PopulateModulesTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        Module::create([
            'name' => 'content',
            'title' => 'Content',
            'version' => '0.0.6',
            'description' => 'Display content',
            'default_module' =>  0,
            'manager' => 0,
            'enabled' => 1,
        ]);

        Module::create([
            'name' => 'blog',
            'title' => 'Blog',
            'version' => '0.0.6',
            'description' => 'Display content list',
            'default_module' =>  0,
            'manager' => 0,
            'enabled' => 1,
        ]);

// TODO: add remaining modules
// (201, 'home', 'Home', '0.0.6', 'HomePage', 1, 0, 1),
// (101, 'dashboard', 'Dashboard', '0.0.6', 'Dashboard', 0, 1, 1),
// (110, 'mcontent', 'ManageContents', '0.0.6', 'Manage contents', 0, 1, 1),
// (102, 'mnotfound', 'NotFound', '0.0.6', 'Object not found', 0, 1, 1),
// (111, 'mcategory', 'Categories', '0.0.6', 'Manage categories', 0, 1, 1),
// (112, 'mmodule', 'Modules', '0.0.6', 'Manage modules', 0, 1, 1),
// (113, 'mtemplate', 'Templates', '0.0.6', 'Manage templates', 0, 1, 1),
// (114, 'muser', 'User', '0.0.6', 'Manage users', 0, 1, 1),
// (199, 'majax', 'Ajax', '0.0.6', 'Ajax run for manager', 0, 1, 1),
// (119, 'profile', 'Profile', '0.0.6', 'Profile management', 0, 1, 1),
// (115, 'mpage', 'Pages', '0.0.6', 'Manage pages', 0, 1, 1),
// (116, 'mmenu', 'Menus', '0.0.6', 'Manage menus', 0, 1, 1),
// (100, 'login', 'Login', '0.0.6', 'Mappiamo manager login', 0, 1, 1),
// (117, 'preferences', 'Preferences', '0.0.6', 'Mappiamo preferences', 0, 1, 1),
// (118, 'mwidget', 'Widgets', '0.0.6', 'Manage widgets', 0, 1, 1),
// (120, 'denied', 'Access denied', '0.0.6', 'Access denied message', 0, 1, 1),
// (121, 'register', 'Register', '0.0.6', 'User registration', 0, 1, 1),
// (216, 'category', 'Category', '0.0.6', 'Displaying category items in blog layout', 0, 0, 1),
// (217, 'api', 'Api', '0.0.6', 'API for data reading', 0, 0, 1),
// (218, 'ajax', 'Ajax module', '0.0.6', 'Frontend ajax run', 0, 0, 1),
// (219, 'event', 'Event', '0.0.6', 'Event module', 0, 0, 1),
// (220, 'finder', 'Finder', '0.0.6', 'Finder module', 0, 0, 1),
// (221, 'passrenew', 'Password renew', '0.0.6', 'Password renew module', 0, 1, 1),
// (222, 'mxmlimport', 'mxmlimport', '0.0.6', 'mxmlimport', 0, 1, 1);


        return true;
    }
}
