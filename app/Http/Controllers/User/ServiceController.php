<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
    	//$services = service::all();
        return view('user/service/services');
    }
    public function service(service $service)
    {
    	return $service;
    	return view('user/services');
    }
    public function construction()
    {
    	return view('user/service/constservice');
    }

    public function advisory()
    {
    	return view('user/service/advservice');
    }

    public function it_service()
    {
    	return view('user/service/itservice');
    }
}
