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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/','HomeController@lifeBand')->name('lifeband');

Route::group(['middleware'=>['admin','auth'],'prefix'=>'superadmin'],function (){
    Route::get('/home','Admin\AdminController@index')->name('home.index');

                 /*===========  Organizations  =========== */

    Route::group(['prefix'=>'organization'],function (){
        Route::get('/home','Admin\OrganizationController@organizationIndex')->name('organization.home');
        Route::get('/dashboard','Admin\OrganizationController@organizationDashboard')->name('organization.dashboard');
                 /*=========== Storing Organizations  =========== */
        Route::post('/store','Admin\OrganizationController@organizationStore')->name('organization.store');
        Route::delete('/delete/{id}','Admin\OrganizationController@organizationDelete')->name('organization.delete');

    });

});

Route::group(['middleware'=>['organization','auth'],'prefix'=>'organization'],function (){
    Route::get('/home','Organization\OrganizationController@index')->name('organization.index');
});

Route::group(['middleware'=>['family','auth'],'prefix'=>'family'],function (){
    Route::get('/home','Family\FamilyController@index')->name('family.index');
});

Route::group(['middleware'=>['individual','auth'],'prefix'=>'individual'],function (){
    Route::get('/home','Individual\IndividualController@index')->name('individual.index');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



//Route::get('/home', 'HomeController@index')->name('home');
