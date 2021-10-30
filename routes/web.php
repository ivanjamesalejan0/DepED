<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Auth::routes();

Route::group([
    'middleware' => 'auth',
], function ($router)
{
    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');

    Route::group([
        'prefix' => 'views',
    ], function ($router)
    {
        Route::group([
            'prefix' => 'admin',
        ], function ($router)
        {
            Route::get('home', 'AdminHomeController@home');
            Route::delete('reports/multiple', 'ReportController@destroyMultiple');
            Route::resource('reports', 'ReportController');
            Route::resource('users', 'UserController');
            Route::get('pdfview',array('as'=>'pdfview','uses'=>'BestInterviewQuestionController@pdfview'));
        });
    });
});

Route::group([
    'middleware' => 'guest',
], function ($router)
{
    Route::get('/', function ()
    {
        return view('welcome');
    });
});

Route::get('/view', function ()
{
    return view('pdf');
});