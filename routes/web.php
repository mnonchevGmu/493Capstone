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
---------------------------------------------------------------------
Controllers (Automatically creates the routes)
---------------------------------------------------------------------
The difference between these routes and the other is that the 
'resource' option should automatically create routes with the 
other links rather than doing it manually like the example above. 
Please let me know if this works.

Route::resource('users', 'FlyController');
Route::resource('CUSTOMER_MEDIA', 'FlyController');
Route::resource('MEDIA_TYPE_LOV', 'FlyController');
Route::resource('_customers', 'FlyController');
Route::resource('PHONE_TYPE_LOV', 'FlyController');
Route::resource('failed_jobs', 'FlyController');
Route::resource('password_resets', 'FlyController');

*/


// Resource controller for Customer
// see 'only' or 'except' syntax to limit the operations in the controller
Route::resource('Customer', 'CustomerController');

//Route for the query form
Route::get('/query',function(){
    return view('customerQueryForm');
});

//added this code for csrf
Route::group(array('before' => 'csrf'), function()
{
    //Route for the query POST
    Route::post('/queryPOST', 'customerQueryController@filter');

});

Route::group(array('before' => 'csrf'), function()
{
    //Route for the validation POST
    Route::post('/validatePost', 'FlyController@newCustomerValidate');

});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function(){
    return view('new');
});

//TODO: remove this when done testing
// Route::get('/testNew', function(){
//     return view('testNew');
// });

Route::get('/returning', function(){
    return view('returning');
});

Route::get('/thanks', function(){
    return view('thanks');
});

Route::post('/dopost', 'FlyController@dopost');

// Route::post('/dopost', function(){
    // return view('dopost');
// });

Route::get('/testform', function(){
    return view('testform');
});
