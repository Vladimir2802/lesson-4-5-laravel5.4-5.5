<?php

namespace app;


trait Statused
{

    public static $statusActive = 10;
    public static $statusHidden = 5;

    public static $statusAttribute = 'status';

    public function getActive($sortField = 'updated_at'){
        return $this->latest($sortField)->active();
    }

    public function scopeActive($query){
        $query->where(self::$statusAttribute, '=', self::getDefaultStatus());
    }

    public static function getDefaultStatus(){
        return self::$statusActive;
    }
}