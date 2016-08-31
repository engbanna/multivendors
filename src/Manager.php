<?php

/**
 * Created by PhpStorm.
 * User: moh
 * Date: 28/08/16
 * Time: 05:18 م
 */
class Manager extends User
{
    public function getStore(){
        $store = new Store();
        return $store;
    }

}