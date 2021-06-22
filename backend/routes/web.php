<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// (2)
Route::get('/path', 'HelloController@index');

/*
Route::get('hello/{message}', function($message)
{
    return 'Hello World' . $message;
});
*/

//Route::get('/hello/{message}', 'App\Http\Controllers\helloController@goodmorning');
//Route::get('/hello/{message}', 'app\Http\Controllers\helloController@goodmorning');

Route::get('/hello','App\Http\Controllers\HelloController@index');

///Users/natsumi/Documents/kappa_laravel/backend/app/Http/Controllers/HelloController.php