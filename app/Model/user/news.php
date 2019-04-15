<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    public function tags()
    {
    	return $this->belongsToMany('App\Model\user\tag','news_tags')->withTimestamps();
    }

    public function getRouteKeyName()
    {
    	return 'title';
    }
    
}
