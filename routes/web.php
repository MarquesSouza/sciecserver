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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('token', function (){
    $http = new GuzzleHttp\Client;

    $response = $http->post('http://sciecserver.edu/oauth/token', [
        'form_params' => [
            'grant_type' => 'password',
            'client_id' => '3',
            'client_secret' => '0IlyToJd4XMD5CiU5qiHJBZMKW33FcsWhRTfVEWM',
            'username' => 'jonasjunior@ifto.edu.br',
            'password' => 'secret',
            'scope' => '',
        ],
    ]);

    return json_decode((string) $response->getBody(), true);

});




