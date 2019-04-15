<?php



//User Route

Route::group(['namespace' => 'User'], function(){

	Route::get('/', 'HomeController@index');

	Route::get('home','HomeController@index')->name('home');

	Route::get('about', 'AboutController@index')->name('about');

	Route::get('services','ServiceController@index')->name('services');

	Route::get('single-service','SingleServiceController@index')->name('single-service');

	Route::get('porject','ProjectController@index')->name('project');

	Route::get('newsdetail','NewsController@index')->name('newsdetail');

});


//Admin Route

Route::group(['namespace' => 'Admin'], function(){

	Route::get('admin/home','HomeController@index')->name('admin/home');

	//Users Route
	Route::resource('admin/user','UsersController');

	//About Route
	Route::resource('admin/about','AboutController');
	
	//Client Route
	Route::resource('admin/client','ClientController');

	//News Route
	Route::resource('admin/news','NewsController');

	//Project Route
	Route::resource('admin/project','ProjectController');

	//Serivce Route
	Route::resource('admin/service','ServiceController');

	//Tag Route
	Route::resource('admin/tag','TagController');

	//Team Route
	Route::resource('admin/team','TeamController');

	


	// Route::get('admin/client',function(){
	
	// })->name('admin/client');

	// Route::get('admin/user',function(){
	// 	return view('admin/user');
	// })->name('admin/user');

	Route::get('admin/adduser',function(){
		return view('admin/adduser');
	})->name('admin/adduser');
 

});










// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
