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

//Route::get('/', function () {
//    return view('home');
//});
Route::get('/', 'HomeController@index');
Route::post('/user-profile/update', 'HomeController@updateUser');


Route::post('/user/employment/store', 'EmploymentsController@createEmployment');
Route::get('/user/employment/get', 'EmploymentsController@getEmployments');
Route::post('/user/employment/delete', 'EmploymentsController@deleteEmployment');

Route::post('/user/interests/store', 'InterestsController@createInterest');
Route::get('/user/interests/get', 'InterestsController@getInterests');
Route::post('/user/interests/delete', 'InterestsController@deleteInterest');

Route::post('/user/memberships/store', 'MembershipsController@createMembership');
Route::get('/user/memberships/get', 'MembershipsController@getMemberships');
Route::post('/user/memberships/delete', 'MembershipsController@deleteMembership');



Route::auth();

