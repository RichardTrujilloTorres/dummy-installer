<?php

namespace Database\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Pages Model
 */
class Page extends Model
{   
	/**
	* Table's name.
	*
	* @var string
	*/
    protected $table = 'pages';

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
        'type',
        'url',
        'blank',
        'created',
        'createdby',
        'modified',
        'modifiedby',
        'enabled',
        'import_id',
        'parent_id',
    ];


}
