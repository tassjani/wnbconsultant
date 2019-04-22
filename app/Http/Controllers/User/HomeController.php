<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\user\project;
use App\Model\user\client;
use App\Model\user\service;
use App\Model\user\about;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $projects = project::paginate(6);
    	$clients = client::all();
        $services = service::all();
        return view('user/home',compact('projects','clients','services'));
    }
    
    
    

    
}
