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


Route::get('/','HomeController@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('token', function (){

    $http = new GuzzleHttp\Client;

    $response = $http->post('http://sciec.app/oauth/token', [
        'form_params' => [
            'grant_type' => 'password',
            'client_id' => '4',
            'client_secret' => 'hf8Wt37OParqZFxSD9SfFmJeFv7DacWwjBuCZlek',
            'username' => 'jonasjunior@ifto.edu.br',
            'password' => 'secret',
            'scope' => '',
        ],
    ]);

    return json_decode((string) $response->getBody(), true);

 })->middleware('auth');
//php artisan passport:keys

Route::get('callback', function (Request $request){
    $http = new GuzzleHttp\Client;
    $response = $http->post('http://sciec.app/oauth/token', [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'client_id' => '1',
            'client_secret' => '6vJZ0PfjPD14dMDSZTyB37LBflh4pFCiToaZaxaq',
            'redirect_uri' => 'http//sciec.app/callback',
            'code' => $request->code,
        ],
    ]);

    return json_decode((string) $response->getBody(), true);

})->middleware('auth');
// refazer depois mudando para tabela com campos mais faceis
Route::get('usuario/cad', 'UsersController@form_cad')->middleware('auth');// feito
Route::get('usuario/index', 'UsersController@index')->middleware('auth');// feito
Route::post('usuario/store', 'UsersController@store')->middleware('auth');//fazendo
Route::get('usuario/show/{id}', 'UsersController@show')->middleware('auth');//feito
Route::delete('usuario/delete/{id}', 'UsersController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('usuario/edit/{id}', 'UsersController@edit')->middleware('auth');
Route::put('usuario/update/{id}', 'UsersController@update')->middleware('auth');
//Tipo de Usuario
Route::get('usuario/config/cad', 'TypeUsersController@form_cad')->middleware('auth');// feito
Route::get('usuario/config/index', 'TypeUsersController@index')->middleware('auth');// feito
Route::post('usuario/config/store', 'TypeUsersController@store')->middleware('auth');//fazendo
Route::get('usuario/config/show/{id}', 'TypeUsersController@show')->middleware('auth');//feito
Route::delete('usuario/config/delete/{id}', 'TypeUsersController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('usuario/config/edit/{id}', 'TypeUsersController@edit')->middleware('auth');
Route::put('usuario/config/update/{id}', 'TypeUsersController@update')->middleware('auth');
//Tipo de Atividade
Route::get('atividade/config/cad', 'TypeActivitiesController@form_cad')->middleware('auth');// feito
Route::get('atividade/config/index', 'TypeActivitiesController@index')->middleware('auth');// feito
Route::post('atividade/config/store', 'TypeActivitiesController@store')->middleware('auth');//fazendo
Route::get('atividade/config/show/{id}', 'TypeActivitiesController@show')->middleware('auth');//feito
Route::delete('atividade/config/delete/{id}', 'TypeActivitiesController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('atividade/config/edit/{id}', 'TypeActivitiesController@edit')->middleware('auth');
Route::put('atividade/config/update/{id}', 'TypeActivitiesController@update')->middleware('auth');

//Tipo de actividade usuario
Route::get('usuario/atividade/config/cad', 'TypeActivityUsersController@form_cad')->middleware('auth');// feito
Route::get('usuario/atividade/config/index', 'TypeActivityUsersController@index')->middleware('auth');// feito
Route::post('usuario/atividade/config/store', 'TypeActivityUsersController@store')->middleware('auth');//fazendo
Route::get('usuario/atividade/config/show/{id}', 'TypeActivityUsersController@show')->middleware('auth');//feito
Route::delete('usuario/atividade/config/delete/{id}', 'TypeActivityUsersController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('usuario/atividade/config/edit/{id}', 'TypeActivityUsersController@edit')->middleware('auth');
Route::put('usuario/atividade/config/update/{id}', 'TypeActivityUsersController@update')->middleware('auth');

//Instituições
Route::get('instituicao/cad', 'InstutionsController@create')->middleware('auth');// feito
Route::get('instituicao/index', 'InstutionsController@index')->middleware('auth');// feito
Route::post('instituicao/store', 'InstutionsController@store')->middleware('auth');//fazendo
Route::get('instituicao/show/{id}', 'InstutionsController@show')->middleware('auth');//feito
Route::delete('instituicao/delete/{id}', 'InstutionsController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('instituicao/edit/{id}', 'InstutionsController@edit')->middleware('auth');
Route::put('instituicao/update/{id}', 'InstutionsController@update')->middleware('auth');

//Course
Route::get('curso/cad','CoursesController@form_cadastro')->middleware('auth');// feito
Route::get('curso/index','CoursesController@index')->middleware('auth');// feito
Route::post('curso/store', 'CoursesController@store')->middleware('auth');//fazendo
Route::get('curso/show/{id}', 'CoursesController@show')->middleware('auth');//feito
Route::delete('curso/delete/{id}', 'CoursesController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('curso/edit/{id}', 'CoursesController@edit')->middleware('auth');
Route::put('curso/update/{id}', 'CoursesController@update')->middleware('auth');

//Participação
Route::get('participacao/cad', 'ParticipationsController@form_cad')->middleware('auth');// feito
Route::get('participacao/index', 'ParticipationsController@index')->middleware('auth');// feito
Route::post('participacao/store', 'ParticipationsController@store')->middleware('auth');//fazendo
Route::get('participacao/show/{id}', 'ParticipationsController@show')->middleware('auth');//feito
Route::delete('participacao/delete/{id}', 'ParticipationsController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('participacao/edit/{id}', 'ParticipationsController@edit')->middleware('auth');
Route::put('participacao/update/{id}', 'ParticipationsController@update')->middleware('auth');

//Artigos
Route::get('artigo/cad', 'ArticlesController@form_cad')->middleware('auth');// feito
Route::get('artigo/index', 'ArticlesController@index')->middleware('auth');// feito
Route::post('artigo/store', 'ArticlesController@store')->middleware('auth');//fazendo
Route::get('artigo/show/{id}', 'ArticlesController@show')->middleware('auth');//feito
Route::delete('artigo/delete/{id}', 'ArticlesController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('artigo/edit/{id}', 'ArticlesController@edit')->middleware('auth');
Route::put('artigo/update/{id}', 'ArticlesController@update')->middleware('auth');

//Evento
Route::get('evento/cad', 'EventsController@form_cad')->middleware('auth');// feito
Route::get('evento/index', 'EventsController@index')->middleware('auth');// feito
Route::post('evento/store', 'EventsController@store')->middleware('auth');//fazendo
Route::get('evento/show/{id}', 'EventsController@show')->middleware('auth');//feito
Route::delete('evento/delete/{id}', 'EventsController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('evento/edit/{id}', 'EventsController@edit')->middleware('auth');
Route::put('evento/update/{id}', 'EventsController@update')->middleware('auth');

//Atividade
Route::get('atividade/cad', 'ActivitiesController@form_cad')->middleware('auth');// feito
Route::post('atividade/store', 'ActivitiesController@store')->middleware('auth');//fazendo
Route::get('atividade/show/{id}', 'ActivitiesController@show')->middleware('auth');//feito
Route::delete('atividade/delete/{id}', 'ActivitiesController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('atividade/edit/{id}', 'ActivitiesController@edit')->middleware('auth');
Route::put('atividade/update/{id}', 'ActivitiesController@update')->middleware('auth');


// obs: as outras tabelas assegir sao tabelas n pra n




