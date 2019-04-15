<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    public function getRouteKeyName()
    {
    	return 'title';
    }
}
