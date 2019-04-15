<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function news()
    {
    	return $this->belongsToMany('App\Model\user\news','news_tags');
    }
}
