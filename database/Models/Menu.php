<?php

namespace Database\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Menus Model
 */
class Menu extends Model
{

	/**
	* Table's name.
	*
	* @var string
	*/
    protected $table = 'menus';

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'created';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'modified'; 


    protected $fillable = [
        'name',
        'title',
        'pages',
        'created',
        'createdby',
        'modified',
        'modifiedby',
        'enabled',
        'import_id',
    ];


}
