<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public function clients()
    {
    	return $this->belongsToMany('App\Model\user\client','client_categories')->withTimestamps();
    } 

    public function services()
    {
    	return $this->belongsToMany('App\Model\user\service','service_categories')->withTimestamps();
    }	
}
