<?php
/**
 * Created by PhpStorm.
 * User: M.Banna
 * Date: 8/31/2016
 * Time: 12:00 PM
 */

class Auth
{
    static $user_id = 5;
    public static function user(){
        $user = new User();
        $user->id = self::$user_id;
        $user->name = 'Mohammed Albanna';
        $user->role = 'vendor';
        return $user;
    }

    public static function loginUsingId($id){
        self::$user_id = $id;
        return true;
    }


}