<?php

/**
 * Created by PhpStorm.
 * User: moh
 * Date: 28/08/16
 * Time: 05:46 م
 */
class Store
{
    public $vendor = 0;
    public $managers = [];
    public $products = [];

    public function addProduct($product){

        if(! $this->canAddProduct()){
            return false;
        }
        $this->products[] = $product->id;
        return true;

    }

    /** return add products */
    public function getProducts(){
        return $this->products;
    }

    public function setVendor($vendor){
        $this->vendor = $vendor;
       return true;
    }

    public function getVendor(){
        return $this->vendor;
    }

    /** Add new manager to this store */
    public function addManager($manager){
        if(!$this->canAddManager()){
            return false;
        }
            $this->managers[] = $manager;
            return true;
    }

    /** get all store manager */
    public function getManagers(){
        return $this->managers ;
    }

    /** To check if the user has permission to add Managet to this store */
    public function canAddManager(){
        //todo if user role is admin return true
        $currentUser_id = Auth::user()->id;
        return ($this->vendor == $currentUser_id);
    }

    /** To check if the user has permission to add products to this store */
    public function canAddProduct(){
        //todo if user role is admin return true
        $currentUser_id = Auth::user()->id;

        /** check if the user is vendor on this store */
        if($this->vendor == $currentUser_id) return true;

        /** check if the user is manager on this store */
        if($this->isManager()) return true;

        return false;
    }

    /** To check if the user manager on this store */
    public function isManager($user=0){
        if($user == 0)  $user = Auth::user()->id;
        return (in_array($user, $this->managers));
    }



}