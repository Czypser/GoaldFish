<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('home', function()
{
    return View::make('pages.home'); // laravel 5 return View('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about'); // laravel 5 return View('pages.about');
});
/*Route::get('/', function()
{
    return View::make('pages.BootstrapTest'); // laravel 5 return View('pages.about');
});*/
Route::get('login2', function()
{
	return View::make('pages.Login.Login');
});
Route::get('register', function()
{
	return View::make('pages.Login.Register');
});
Route::get('forgotpassword', function()
{
	return View::make('pages.Login.ForgotPassword');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', 'MainPageController@index');
    Route::get('/home', 'HomeController@index');
});
?>