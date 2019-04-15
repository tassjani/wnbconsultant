<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    public function project()
    {
    	return $this->belongsToMany('App\Model\user\project','client_categories');
    }

}
