<?php

namespace Database\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Modules Model
 */
class Module extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    

	/**
	* Table's name.
	*
	* @var string
	*/
    protected $table = 'modules';

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
