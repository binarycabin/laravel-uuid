<?php

namespace BinaryCabin\LaravelUUID\Traits;

trait HasUUID{

    public static function bootHasUUID(){
        static::creating(function($model) {
            $uuidFieldName = $model->getUUIDFieldName();
            if(empty($model->$uuidFieldName)){
                $model->$uuidFieldName = static::generateUUID();
            }
        });
    }

    public function getUUIDFieldName(){
        if(!empty($this->uuidFieldName)){
            return $this->uuidFieldName;
        }
        return 'uuid';
    }

    public static function generateUUID(){
        return \Uuid::generate()->string;
    }

}