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

Route::group(['middleware' => 'auth'], function() {
    /*
     * Home routes
     */
    get('/', [
        'as' => 'home', 'uses' => 'DashboardController@home'
    ]);
    get('/home', [
        'as' => 'home', 'uses' => 'DashboardController@home'
    ]);
    /*
     *Logout Route(s)
     */
    get('logout',[
        'as' => 'logout', 'uses' =>   'Auth\AuthController@getLogout'
    ]);
    /*
     * Home routes
     */
    get('/', [
        'as' => 'home', 'uses' => 'DashboardController@home'
    ]);
    /*
     *Logout Route(s)
     */
    get('logout',[
        'as' => 'logout', 'uses' =>   'Auth\AuthController@getLogout'
    ]);
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


    post('create/innovation/', [
            'as' => 'createInnovation', 'uses' => 'InnovationController@store'
        ]);

    post('/innovation/{id}/update', [
            'as' => 'updateInnovation', 'uses' => 'InnovationController@update'
        ]);

    get('/innovation/fund/{id}', [
        'as' => 'fundInnovation', 'uses' => 'InnovationController@fund'
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
    get('auth/logout',[
        'as' => 'logout', 'uses' =>   'Auth\AuthController@getLogout'
    ]);

    /*
     * Profile routes
     */
    get('/innovator/profile/{innovator_id}', 'ProfileController@loadProfile');

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
    get('auth/register', [
        'as' => 'register', 'uses' => 'Auth\AuthController@getRegister'
    ]);

    post('auth/register/innovator', [
        'as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister'
    ]);

    post('auth/register/investor', [
        'as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister'
    ]);

    post('auth/register/bongo-employee', [
        'as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister'
    ]);

    /*
     * Request routes
     */

    get('/request/investor/send/', 'InvestorRequestsController@getSendRequest');

    get('/request/bongo/send', 'BongoRequestController@getSendRequest');

    post('/request/investor/send/', 'InvestorRequestsController@persistRequest');

    post('/request/bongo/send/', 'BongoRequestController@persistRequest');

    get('/request/all/investors', 'InvestorRequestsController@getAll');


    get('/request/all/employees/', 'BongoRequestController@getAll');

    get('/request/bongo/send/{request_id}/', 'InvestorRequestsController@bongoSendLink');

    get('/request/bongo-employee/send/{request_id}/', 'BongoRequestController@bongoSendLink');

    get('/request/bongo/confirm/{request_link}', 'InvestorRequestsController@bongoConfirmLink');


    get('/request/bongo-employee/confirm/{request_link}', 'BongoRequestController@bongoConfirmLink');

    get('dashboard/bongo/admin', [
        'as' => 'bongoDashboard', 'uses' => 'DashboardController@bongoEmployee'
    ]);

});


