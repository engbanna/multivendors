<?php

/**
 * Created by PhpStorm.
 * User: moh
 * Date: 28/08/16
 * Time: 04:54 م
 */
class Vendor
{
    public $store_id=0;

    public function get_store_count(){
        return 1;
    }

    public function setStore($id){
        if($this->store_id == 0){
            $this->store_id= $id;
            return true;
        }
        return false;
    }

    public function addManager($manager){

        if( $manager instanceof User){
            return true;
        }
        return false;

    }


    public function getStore(){
        $store = new Store();
        return $store;
    }



}