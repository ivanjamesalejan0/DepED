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
    Route::get('statistic', 'HomeController@index');
    Route::get('home', 'HomeController@index');
    Route::get('summary', 'SummaryController@index');

    Route::group([
        'prefix' => 'views',
    ], function ($router)
    {
        Route::group([
            'prefix' => 'admin',
        ], function ($router)
        {
            Route::get('summary', 'SummaryController@index');
            Route::get('statistics', 'ChartController@index');
            Route::get('home', 'AdminHomeController@home');
            Route::delete('reports/multiple', 'ReportController@destroyMultiple');
            Route::resource('reports', 'ReportController');
            Route::resource('users', 'UserController');
            Route::get('pdfview', array('as' => 'pdfview', 'uses' => 'BestInterviewQuestionController@pdfview'));
            Route::get('/ajax_upload', 'AjaxUploadController@index');
            Route::post('/ajax_upload/action', 'AjaxUploadController@action')->name('ajaxupload.action');
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
        Route::resource('users', 'UserController');
    });
});