<?php

Auth::routes();


// Welcome Routes
Route::get('/', function () { return view('static.welcome'); } );
Route::get('/home', function () { return view('static.welcome'); } )->name('welcome');

// Static Routes
Route::get('/company', function (){ return view('static.company'); })->name('company');
Route::get('/services', function (){ return view('static.services'); })->name('services');
Route::get('/rules', function (){ return view('static.rules'); })->name('rules');


Route::middleware('auth')->group( function() {
    // Post Routes
    Route::post('/posts/{blogId}', 'PostsController@store')->name('posts.store');

    Route::delete('/posts/{postId}', 'PostsController@destroy')->name('posts.destroy');


    // User Routes
    Route::get('/users/filter', 'UsersController@filter')->name('users.filter');

    Route::get('/users', 'UsersController@index')->name('users.index');
    Route::get('/users/{userId}', 'UsersController@show')->name('users.show');

    Route::get('/users/{userId}/edit', 'UsersController@edit')->name('users.edit');
    Route::patch('/users/{userId}', 'UsersController@update')->name('users.update');

    Route::delete('/users/{userId}', 'UsersController@destroy')->name('users.destroy');



    // Blog Routes
    Route::get('/blogs', 'BlogsController@index')->name('blogs.index');

    Route::get('/blogs/create', 'BlogsController@create')->name('blogs.create');
    Route::post('/blogs', 'BlogsController@store')->name('blogs.store');

    Route::get('/blogs/{blogId}', 'BlogsController@show')->name('blogs.show');

    Route::get('/blogs/{blogId}/edit', 'BlogsController@edit')->name('blogs.edit');
    Route::patch('/blogs/{blogId}', 'BlogsController@update')->name('blogs.update');

    Route::delete('/blogs/{blogId}', 'BlogsController@destroy')->name('blogs.destroy');


    // Admitted Routes
    Route::get('/admitteds', 'AdmittedsController@index')->name('admitteds.index');
    Route::delete('/admitteds/{userId}', 'AdmittedsController@destroy')->name('admitteds.destroy');

    // Request Routes
    Route::get('/requests', 'RequestsController@index')->name('requests.index');
    Route::delete('/refuse/{userId}', 'RequestsController@refuse')->name('requests.refuse');
    Route::delete('/accept/{userId}', 'RequestsController@accept')->name('requests.accept');
    Route::post('/blogs/{blogsId}/request', 'RequestsController@store')->name('requests.store');
});



Route::group(['middleware' => 'is.admin' ], function () {
    // Staff management routes
    Route::get('/staffs', 'StaffsController@index')->name('staffs.index');

    Route::get('/staffs/create', 'StaffsController@create')->name('staffs.create');
    Route::post('/staffs', 'StaffsController@store')->name('staffs.store');

    // Stats routes
    Route::get('/stats', function() { return view('stats.home'); } )->name('stats.home');

    // Admin admitted routes
    Route::get('/admitteds/{blogId}', 'AdmittedsController@index_admin')->name('admitteds.index_admin');
});
