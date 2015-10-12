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

Route::get('/test', function () {
    return view('welcome');
});

////login
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

////Registration
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');

////reset password page
//Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
//Route::post('password/reset', 'Auth\PasswordController@postRest');

////send email for password
//Route::get('password/email', 'Auth\PasswordController@getEmail');
//Route::post('password/email', 'Auth\PasswordController@postEmail');


//crm
Route::get('/crm/orders', 'CRM\CrmOrdersController@displayOrder');
Route::post('/crm/api/orders', 'CRM\CrmOrdersController@order');
//Route::get('/crm', 'CRM\CrmAuthController@login');

Route::post('/crm/new_user/', 'CRM\CrmUserAdminController@postRegister');
Route::get('/crm/new_user/', 'CRM\CrmUserAdminController@getRegister');

Route::get('/crm/login', 'CRM\CrmAuthController@getLogin');
Route::post('/crm/login', 'CRM\CrmAuthController@postLogin');
Route::get('/crm/logout', 'CRM\CrmAuthController@getLogout');

Route::get('/crm/register', 'CRM\CrmAuthController@getRegister');
Route::post('/crm/register', 'CRM\CrmAuthController@postRegister');

//Over All
//Route::get('/', 'CRM\CrmOrdersController@order');

