<?php

namespace Database\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Categories Model
 */
class Category extends Model
{
	/**
	* Table's name.
	*
	* @var string
	*/
    protected $table = 'categories';

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
    	'sample-category',
        'title', 
        'contents',
        'flagship', 
		'created', 
        'createdby', 
		'modified',
		'modifiedby', 
		'enabled', 
		'import_id',
    ];

}
