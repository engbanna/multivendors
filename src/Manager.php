<?php

/**
 * Created by PhpStorm.
 * User: moh
 * Date: 28/08/16
 * Time: 05:18 م
 */
class Manager
{
    public function getStore(){
        $store = new Store();
        return $store;
    }

}