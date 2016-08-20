<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/dashboard', 'DashBoard@index');

Route::get('/new_repo', 'Repository@new_repo');

Route::get('/public_repo', 'Repository@public_repo');

Route::get('/private_repo', 'Repository@private_repo');

Route::get('/repo_history', 'Repository@repo_history');

/*Route::get('/private_repo', function(){
	return view('/pages/Repository/private_repo');
});

Route::get('/repo_history', function(){
	return view('/pages/Repository/repo_history');
});

*/
