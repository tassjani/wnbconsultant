<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	$users = [
		'0' => [
			'fisrt_name' => 'Natassja',
			'last_name' => 'Adani',
			'location' => 'Ind'
		],
		'1' => [
			'fisrt_name' => 'Angelina',
			'last_name' => 'Jolie',
			'location' => 'USA'
		]
	];
	return view('admin.users.index', compact('users'));
    }

    public function create()
    {
    	return view('admin.users.create');
    }
    public function store(Request $request)
    {
    	User::create($request->all());
    	return 'success';
    	return $request->all();
    }
}
