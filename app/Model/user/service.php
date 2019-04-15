<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    public function project()
    {
    	return $this->belongsToMany('App\Model\user\project','service_categories');
    } 	
    public function getRouteKeyName()
    {
    	return 'title';
    }
}
