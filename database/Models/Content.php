<?php

namespace Database\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Contents Model
 */
class Content extends Model
{
	/**
	* Table's name.
	*
	* @var string
	*/
    protected $table = 'contents';

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
    	'type',
        'title',
        'name',
        'address',
        'lat',
        'lng',
        'license',
        'text',
        'url',
        'start',
        'end',
        'created',
        'createdby',
        'modified',
        'modifiedby',
        'hits',
        'translation',
        'enable',
        'language',
        'import_id',
        'route',
    ];



}
