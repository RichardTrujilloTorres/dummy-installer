<?php

namespace Database;



/**
* All installer operations.
*
* Richard Trujillo <richard.trujillo.torres@gmail.com>
*/

return [

	/**
	* Tables creation.
	*/
	'create_categories_table' => CreateCategoriesTable::class,
	'create_contents_table' => CreateContentsTable::class,
	'create_content_media_table' => CreateContentMediaTable::class,
	'create_content_meta_table' => CreateContentMetaTable::class,
	'create_licenses_table' => CreateLicensesTable::class,
	'create_menus_table' => CreateMenusTable::class,
	'create_modules_table' => CreateModulesTable::class,
	'create_pages_table' => CreatePagesTable::class,
	'create_preferences_table' => CreatePreferencesTable::class,
	'create_templates_table' => CreateTemplatesTable::class,
	'create_users_table' => CreateUsersTable::class,
	'create_user_groups_table' => CreateUserGroupsTable::class,
	'create_widgets_table' => CreateWidgetsTable::class,

	/**
	* Tables population.
	*/

	//

];