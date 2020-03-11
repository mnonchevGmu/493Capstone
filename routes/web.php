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

/*
--------------------------------------------------------------------
Controllers 
-------------------------------------------------------------------- 
Here the routes can retrieve the conrollers for specific functions to run.
It would connect each controller to a specific part of the website. 
The only one I haven't put anything in for is the "/dopost" because the
website is not loading.
______________________________________________________________________

Route::get'/new', 'LoginController@_construct');  
Route::get'/new', 'ConfirmPasswordController@_construct');
Route::get'/new', 'RegisterController@_construct');
Route::get'/new', 'VerificationController@_construct');
Route::get'/returning, 'ConfirmPasswordController@_construct');
Route::get'/returning, 'LoginController@_construct');
Route::get'/returning, 'VerificationController@_construct');
Route::get'/thanks, 'LoginController@_construct');
Route::get'/thanks, 'RegisterController@_construct');
Route::get'/testform, 'RegisterController@_construct;
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function(){
    return view('new');
});

Route::get('/returning', function(){
    return view('returning');
});

Route::get('/thanks', function(){
    return view('thanks');
});

Route::post('/dopost', function(){
    return view('dopost');
});

Route::get('/testform', function(){
    return view('testform');
});
