<?php



/*
|--------------------------------
|User Route
|--------------------------------
*/

Route::group(['namespace' => 'User'], function(){
	

	Route::get('/', 'HomeController@index');
	
	Route::get('/',function()
	{
		return View::make('user/home');

	});

	Route::get('home','HomeController@index')->name('home');

	Route::get('/','AboutController@show');

	Route::get('about', 'AboutController@about')->name('about');

	Route::get('services','ServiceController@index')->name('services');

	Route::get('single-service','SingleServiceController@index')->name('single-service');

	Route::get('porject','ProjectController@index')->name('project');

	//Route::get('newsdetail','NewsController@shownews')->name('newsdetail');

	Route::get('news','NewsController@Index')->name('news');

	Route::get('/','NewsController@newshome');

	Route::get('/newsdetail/{id}',['as' =>'news.shownews', 'uses' => 'NewsController@shownews']);

	Route::get('construction','ServiceController@construction')->name('construction');

	Route::get('advisory','ServiceController@advisory')->name('advisory');

	Route::get('it_service','ServiceController@it_service')->name('it_service');

	Route::resource('contacts','ContactsController');


});


/*
|----------------------------------
|Admin Route
|----------------------------------
*/

Route::group(['namespace' => 'Admin'], function(){


	
	
	Route::get('admin/home','HomeController@index')->name('admin/home');
	
	//Users Route
	Route::resource('admin/user','UsersController');

	//Roles Route
	Route::resource('admin/role','RoleController');

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

	//Contact Route
	Route::resource('admin/contact','ContactController');

	// //Admin login
	 Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	
	Route::post('admin/login', 'Auth\LoginController@login');

	Route::get('admin/logout', function(){
		return view('admin.login');
	});

	Route::post('admin/logout', 'Auth\LoginController@logout')->name('admin.logout');

	Route::get('admin/adduser',function(){
		return view('admin/adduser');
	})->name('admin/adduser');
 

});










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

