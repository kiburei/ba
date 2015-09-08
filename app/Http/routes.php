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