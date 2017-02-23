<?php

namespace Database\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Users Model
 */
class User extends Model
{   

	/**
	* Table's name.
	*
	* @var string
	*/
    protected $table = 'users';

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
        'group_id',
        'username',
        'password',
        'email',
        'name',
        'created',
        'createdby',
        'modified',
        'modifiedby',
        'lastlogin',
        'activation',
        'enabled',
        'import_id',
    ];


}
