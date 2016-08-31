<?php

/**
 * Created by PhpStorm.
 * User: moh
 * Date: 28/08/16
 * Time: 05:46 م
 */
class Store
{
    public $vendor = '';
    public $managers = [];
    public function addProduct($product, $user){
        if($user instanceof Vendor){
            return $this->isStoreVendor($user);

        }elseif($user instanceof Manager){
            return $this->isStoreManager($user);

        }
        return false;
    }

    public function setVendor($vendor){
        $this->vendor = $vendor;
       return true;
    }

    public function addManager($vendor,$manager){
        if($vendor == $this->vendor) {
            $this->managers[] = $manager;
            return true;
        }
        return false;

    }

    public function getManagers(){
        return $this->managers ;
    }

    public function isStoreVendor($user){
        return ($this->vendor == $user);
    }

    public function isStoreManager($user){
        return (in_array($user, $this->managers));
    }

}