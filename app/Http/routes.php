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


get('test', function(){
   return view('home.investor');
});


Route::group(['middleware' => 'auth'], function() {

    get('/', function () {
        return view('home.index');
    });

    /*
     * Routes for the innovations
     */
    get('/innovation/{id}', [
            'as' => 'specificInnovation', 'uses' => 'InnovationController@show'
        ]);

    get('/innovation/{id}/update', [
            'as' => 'editInnovation', 'uses' => 'InnovationController@edit'
        ]);

    get('/innovation/{id}/delete', [
            'as' => 'deleteInnovation', 'uses' => 'InnovationController@destroy'
        ]);

    post('/innovation/', [
            'as' => 'createInnovation', 'uses' => 'InnovationController@store'
        ]);

    post('/innovation/{id}/update', [
            'as' => 'updateInnovation', 'uses' => 'InnovationController@update'
        ]);

    get('innovations', function()
    {
        $query = Request::get('q');

        $repo = App::make('App\Repos\Innovation\InnovationRepository');

        $innovations = $query

            ? $repo->search($query)
            : $repo->getAll();

        return View('dashboards.innovator')->withInnovations($innovations);
    });

    /*
     * Routes for the Comments
     */

    post('/innovation/{id}/chat', [
            'as' => 'storeComment', 'uses' => 'CommentController@store'
        ]);

    //Dashboard retrieval routes
    get('dashboard/innovator', [
            'as' => 'innovatorDashboard', 'uses' => 'DashboardController@innovator'
        ]);

    get('dashboard/investor', [
            'as' => 'investorDashboard', 'uses' => 'DashboardController@investor'
        ]);
    //Logout Route(s)
    get('logout',[
        'as' => 'logout', 'uses' =>   'Auth\AuthController@getLogout'
    ]);

});


Route::group(['middleware' => 'guest'], function() {

    // Login routes
    get('login', [
        'as' => 'login', 'uses' => 'Auth\AuthController@getLogin'
    ]);
    post('login', [
        'as' => 'login', 'uses' => 'Auth\AuthController@postLogin'
    ]);

// Registration routes...
    get('register', [
        'as' => 'register', 'uses' => 'Auth\AuthController@getRegister'
    ]);

    post('register', [
        'as' => 'register', 'uses' => 'Auth\AuthController@postRegister'
    ]);

});