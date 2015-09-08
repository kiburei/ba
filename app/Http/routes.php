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

get('/', function () {
    return view('ba.home.index');
});

/*
 * Routes for the innovations
 */
get('/innovation/all', 'InnovationController@index');
get('/innovation/{id}', 'InnovationController@show');
get('/innovation/{id}/update', 'InnovationController@edit');
get('/innovation/{id}/delete', 'InnovationController@destroy');
post('/innovation/', 'InnovationController@store');
post('/innovation/{id}/update', 'InnovationController@update');


/*
 * Routes for the Comments
 */

post('/innovation/{id}/chat', 'CommentController@store');

//Dashboard retrieval routes
Route::get('dashboard/innovator', 'Dashboard\DashboardController@showInnovator');
Route::get('dashboard/investor', 'Dashboard\DashboardController@showInvestor');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Logout route
Route::get('logout', function()
{
    \Auth::logout();

    return view('auth.login');
});