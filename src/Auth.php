<?php
/**
 * Created by PhpStorm.
 * User: M.Banna
 * Date: 8/31/2016
 * Time: 12:00 PM
 */


class Auth
{
    public static function user(){
        $user = new User();
        $user->id = 5;
        $user->name = 'Mohammed Albanna';
        $user->role = 'vendor';
        return $user;
    }

    /*public static function loginUsingId($id){
        //todo
        return true;
    }*/

}