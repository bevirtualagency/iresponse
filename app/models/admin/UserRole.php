<?php declare(strict_types=1); namespace IR\App\Models\Admin; if (!defined('IR_START')) exit('<pre>No direct script access allowed</pre>');
/**
 * @framework       iResponse Framework 
 * @version         1.0
 * @author          Amine Idrissi <contact@iresponse.tech>
 * @date            2019
 * @name            UserRole.php	
 */

# orm 
use IR\Orm\ActiveRecord as ActiveRecord;

/**
 * @name UserRole
 * @description UserRole Model
 */
class UserRole extends ActiveRecord
{
    /**
     * @database
     * @readwrite
     */
    protected $_databaseKey = 'system';

    /**
     * @schema
     * @readwrite
     */
    protected $_schema = 'admin';

    /**
     * @table
     * @readwrite
     */
    protected $_table = 'users_roles';

    # columns

    /**
     * @column
     * @readwrite
     * @primary
     * @indexed
     * @autoincrement
     * @type integer
     * @nullable false
     * @length 
     */
    protected $_id;

    /**
     * @column
     * @readwrite
     * @indexed
     * @type integer
     * @nullable false
     * @length 
     */
    protected $_user_id;

    /**
     * @column
     * @readwrite
     * @indexed
     * @type integer
     * @nullable false
     * @length 
     */
    protected $_role_id;

    /**
     * @column
     * @readwrite
     * @type text
     * @nullable false
     * @length 200
     */
    protected $_created_by;

    /**
     * @column
     * @readwrite
     * @type text
     * @nullable true
     * @length 200
     */
    protected $_last_updated_by;

    /**
     * @column
     * @readwrite
     * @type date
     * @nullable false
     * @length 
     */
    protected $_created_date;

    /**
     * @column
     * @readwrite
     * @type date
     * @nullable true
     * @length 
     */
    protected $_last_updated_date;
}


