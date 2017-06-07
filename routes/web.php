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

});
// refazer depois mudando para tabela com campos mais faceis
Route::get('usuario/cad', 'UsersController@form_cad');// feito
Route::get('usuario/index', 'UsersController@index');// feito
Route::post('usuario/store', 'UsersController@store');//fazendo
Route::get('usuario/show/{id}', 'UsersController@show');//feito
Route::delete('usuario/delete/{id}', 'UsersController@destroy');//feito obs: mudar para exclusao logica
Route::get('usuario/edit/{id}', 'UsersController@edit');
Route::put('usuario/update/{id}', 'UsersController@update');
//Tipo de Usuario
Route::get('usuario/config/cad', 'TypeUsersController@form_cad');// feito
Route::get('usuario/config/index', 'TypeUsersController@index');// feito
Route::post('usuario/config/store', 'TypeUsersController@store');//fazendo
Route::get('usuario/config/show/{id}', 'TypeUsersController@show');//feito
Route::delete('usuario/config/delete/{id}', 'TypeUsersController@destroy');//feito obs: mudar para exclusao logica
Route::get('usuario/config/edit/{id}', 'TypeUsersController@edit');
Route::put('usuario/config/update/{id}', 'TypeUsersController@update');
//Tipo de Atividade
Route::get('atividade/config/cad', 'TypeActivitiesController@form_cad');// feito
Route::get('atividade/config/index', 'TypeActivitiesController@index');// feito
Route::post('atividade/config/store', 'TypeActivitiesController@store');//fazendo
Route::get('atividade/config/show/{id}', 'TypeActivitiesController@show');//feito
Route::delete('atividade/config/delete/{id}', 'TypeActivitiesController@destroy');//feito obs: mudar para exclusao logica
Route::get('atividade/config/edit/{id}', 'TypeActivitiesController@edit');
Route::put('atividade/config/update/{id}', 'TypeActivitiesController@update');

//Tipo de actividade usuario
Route::get('usuario/atividade/config/cad', 'TypeActivityUsersController@form_cad');// feito
Route::get('usuario/atividade/config/index', 'TypeActivityUsersController@index');// feito
Route::post('usuario/atividade/config/store', 'TypeActivityUsersController@store');//fazendo
Route::get('usuario/atividade/config/show/{id}', 'TypeActivityUsersController@show');//feito
Route::delete('usuario/atividade/config/delete/{id}', 'TypeActivityUsersController@destroy');//feito obs: mudar para exclusao logica
Route::get('usuario/atividade/config/edit/{id}', 'TypeActivityUsersController@edit');
Route::put('usuario/atividade/config/update/{id}', 'TypeActivityUsersController@update');

//Instituições
Route::get('instituicao/cad', 'InstutionsController@create');// feito
Route::get('instituicao/index', 'InstutionsController@index');// feito
Route::post('instituicao/store', 'InstutionsController@store');//fazendo
Route::get('instituicao/show/{id}', 'InstutionsController@show');//feito
Route::delete('instituicao/delete/{id}', 'InstutionsController@destroy');//feito obs: mudar para exclusao logica
Route::get('instituicao/edit/{id}', 'InstutionsController@edit');
Route::put('instituicao/update/{id}', 'InstutionsController@update');

//Course
Route::get('curso/cad','CoursesController@form_cadastro');// feito
Route::get('curso/index','CoursesController@index');// feito
Route::post('curso/store', 'CoursesController@store');//fazendo
Route::get('curso/show/{id}', 'CoursesController@show');//feito
Route::delete('curso/delete/{id}', 'CoursesController@destroy');//feito obs: mudar para exclusao logica
Route::get('curso/edit/{id}', 'CoursesController@edit');
Route::put('curso/update/{id}', 'CoursesController@update');

//Participação
Route::get('participacao/cad', 'ParticipationsController@form_cad');// feito
Route::get('participacao/index', 'ParticipationsController@index');// feito
Route::post('participacao/store', 'ParticipationsController@store');//fazendo
Route::get('participacao/show/{id}', 'ParticipationsController@show');//feito
Route::delete('participacao/delete/{id}', 'ParticipationsController@destroy');//feito obs: mudar para exclusao logica
Route::get('participacao/edit/{id}', 'ParticipationsController@edit');
Route::put('participacao/update/{id}', 'ParticipationsController@update');

//Artigos
Route::get('artigo/cad', 'ArticlesController@form_cad');// feito
Route::get('artigo/index', 'ArticlesController@index');// feito
Route::post('artigo/store', 'ArticlesController@store');//fazendo
Route::get('artigo/show/{id}', 'ArticlesController@show');//feito
Route::delete('artigo/delete/{id}', 'ArticlesController@destroy');//feito obs: mudar para exclusao logica
Route::get('artigo/edit/{id}', 'ArticlesController@edit');
Route::put('artigo/update/{id}', 'ArticlesController@update');

//Evento
Route::get('evento/cad', 'EventsController@form_cad');// feito
Route::get('evento/index', 'EventsController@index');// feito
Route::post('evento/store', 'EventsController@store');//fazendo
Route::get('evento/show/{id}', 'EventsController@show');//feito
Route::delete('evento/delete/{id}', 'EventsController@destroy');//feito obs: mudar para exclusao logica
Route::get('evento/edit/{id}', 'EventsController@edit');
Route::put('evento/update/{id}', 'EventsController@update');

//Atividade
Route::get('atividade/cad', 'ActivitiesController@form_cad');// feito
Route::post('atividade/store', 'ActivitiesController@store');//fazendo
Route::get('atividade/show/{id}', 'ActivitiesController@show');//feito
Route::delete('atividade/delete/{id}', 'ActivitiesController@destroy');//feito obs: mudar para exclusao logica
Route::get('atividade/edit/{id}', 'ActivitiesController@edit');
Route::put('atividade/update/{id}', 'ActivitiesController@update');


// obs: as outras tabelas assegir sao tabelas n pra n




