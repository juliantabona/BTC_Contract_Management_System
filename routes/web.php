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

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::get('/overview', function () {
    return view('overview.index');
})->middleware('auth');

/*
*   Contract Routes & Names for Index, Create, Store, Show, Edit, Update & Destroy
*   Contracts refer to the various requets and agreements in the system
*/
Route::group(['prefix' => 'contracts',  'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'templates'], function () {
        /*
         *  Template Routes & Names for Index, Create, Store, Show, Edit, Update & Destroy
         *  Templates refer to the various mockups used to generate application forms & contract documments
         */
        Route::resource('/', 'TemplateController', [
            'names' => [
                'index' => 'template.index',
                'create' => 'template.create',
                'store' => 'template.store',
                'show' => 'template.show',
                'edit' => 'template.edit',
                'update' => 'template.update',
                'destroy' => 'template.destroy',
            ],
        ]);

        //  create and update contract templates
        Route::get('create/{template}/step/2', 'TemplateController@createStep2')->name('template.create.step2');
        Route::get('create/{template}/step/3', 'TemplateController@createStep3')->name('template.create.step3');
        Route::get('create/{template}/step/4', 'TemplateController@createStep4')->name('template.create.step4');
        Route::put('create/{template}/step/2', 'TemplateController@updateStep2')->name('template.update.step2');
        Route::put('create/{template}/step/3', 'TemplateController@updateStep3')->name('template.update.step3');
    });
});

Route::group(['prefix' => 'application',  'middleware' => 'auth'], function () {
    Route::get('/{template}', 'RequestApplicationController@show')->name('application.show');
    Route::post('/{template}', 'RequestApplicationController@store')->name('application.store');
});

Route::group(['prefix' => 'requests',  'middleware' => 'auth'], function () {
    Route::get('/', 'RequestController@index')->name('request.index');
    Route::get('/authorized', 'RequestController@authorized')->name('request.authorized');
    Route::get('/reviewed', 'RequestController@reviewed')->name('request.reviewed');
    Route::get('/inspection', 'RequestController@inspection')->name('request.inspection');
    Route::get('/{request}', 'RequestController@show')->name('request.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
