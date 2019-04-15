<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\user\project;
use App\Model\user\client;
use App\Model\user\service;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
    	$projects = project::paginate(10);
    	$clients = client::all();
        $services = service::all();

    	return view('user/project/project',compact('projects','clients','services'));
    }

  


}
