<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\user\about;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about()
    {
    	$abouts = about::all();
    	return view('user/about/about',compact('abouts'));
    }
}
