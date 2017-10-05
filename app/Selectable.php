<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 10/5/17
 * Time: 8:06 PM
 */

namespace App;


trait Selectable
{

    /**
     * (slash ** Enter)
     *
     * [
     *    4 => 'Conversation',
     *    8 => 'Flood',
     *    12 => 'Spam',
     * ]
     *
     * @param string $value
     * @param string $key
     * @return mixed
     */
    public static function getSelectList($value = 'name', $key = 'id'){
        return self::all()->pluck($value, $key);
    }
}