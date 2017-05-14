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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get ('/article{n}', function($n)
// {
//     return view('article')->with('numero', $n);
// })->where('n', '[0-9]+');

Route::get('/', 'WelcomeController@index');

get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

get('facture/{n}', function($n) {

    return view('facture')->withNumero($n);

})->where('n', '[0-9]+');

get('users', 'UsersController@getInfos');

post('users', 'UsersController@postInfos');

Route::resource('demo', 'DemoController');
