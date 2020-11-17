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

Route::post('superadmin/organization/mail','Admin\MailController@store')->name('user.mail');

Route::get('mail/registration',function (){
    return view('mail');
});

                 /*===========  Main Routes  =========== */

Route::get('/','HomeController@lifeBand')->name('lifeband');

Route::group(['middleware'=>['admin','auth'],'prefix'=>'superadmin'],function (){
    Route::get('/home','Admin\AdminController@index')->name('home.index');

                 /*===========  Organizations  =========== */

    Route::group(['prefix'=>'organization'],function (){
        Route::get('/home','Admin\OrganizationController@organizationIndex')->name('organization.home');
        Route::get('/dashboard/{id}','Admin\OrganizationController@organizationDashboard')->name('organization.dashboard');
                 /*=========== Storing Organizations  =========== */
        Route::post('/store','Admin\OrganizationController@organizationStore')->name('organization.store');
        Route::get('/edit/{id}','Admin\OrganizationController@organizationEdit')->name('organization.edit');
        Route::put('/update/{id}','Admin\OrganizationController@organizationUpdate')->name('organization.update');
        Route::delete('/delete/{id}','Admin\OrganizationController@organizationDelete')->name('organization.delete');
                 /*=========== Organizations Users  =========== */
        Route::get('/users/{id}','Admin\OrganizationController@userIndex')->name('organization.users');
                 /*=========== Organizations Users Group =========== */
        Route::get('/users/group','Admin\OrganizationController@groupIndex')->name('organization.users.group');
                /*=========== Organizations Users Invite =========== */
        Route::post('/mail','Admin\MailController@store')->name('organization.user.store.email');
        Route::get('/user/invite/{email}','Admin\MailController@create')->name('user.invite.mail');
    });

                /*=========== Family Accounts =========== */

    Route::group(['prefix'=>'family-accounts','namespace'=>'Admin'],function (){
        Route::get('/dashboard/{id}','FamilyController@dashboard')->name('family.accounts.dashboard');
                /*=========== Storing Family Account  =========== */
        Route::get('/home','FamilyController@index')->name('family.accounts.home');
        Route::post('/store','FamilyController@store')->name('family.accounts.store');
        Route::get('/edit/{id}','FamilyController@edit')->name('family.accounts.edit');
        Route::put('/update/{id}','FamilyController@update')->name('family.accounts.update');
        Route::delete('/delete/{id}','FamilyController@delete')->name('family.accounts.delete');
               /*=========== Family Account Users  =========== */
        Route::get('/users','FamilyController@userIndex')->name('family.accounts.users');
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
