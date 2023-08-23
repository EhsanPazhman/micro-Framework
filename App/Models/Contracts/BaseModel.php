<?php

namespace App\Models\Contracts;

abstract class BaseModel implements CrudInterface{
    protected $connection;
    protected $table;
    protected $primaryKey = 'id';
    protected $pageSize = 10;
    protected $attributes = [];

    // protected function __construct(){
    //     # if mysql => set mysql connection
    // }

    public function getAttribute($key){
        if(!$key || !array_key_exists($key,$this->attributes)){
            return null;
        }
        return $this->attributes[$key];
    }
    
    public function getAttributes(){
        return $this->attributes;
    }

    public function __get($property){
        return $this->getAttribute($property);
    }

    public function __set($property, $value)
    {
        if(!array_key_exists($property,$this->attributes)){
            return null;
        }
        $this->attributes[$property] = $value;
    }

    
}