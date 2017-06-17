<?php
/** ------------------------------------------Auth-------------------------------------------------------------------------
 */
Auth::routes();
/** ------------------------------------------Home-------------------------------------------------------------------------
 */
Route::get('/home', 'HomeController@welcome');
Route::get('/', 'HomeController@welcome');
/** ------------------------------------------Usuario (Administrador)-------------------------------------------------------------------------
 */
Route::get('usuario/cad', 'UsersController@form_cad')->middleware('auth');// Selecionar tipo de Usuario.
Route::get('usuario/index', 'UsersController@index')->middleware('auth');
Route::post('usuario/store', 'UsersController@store')->middleware('auth');//arrumar
Route::get('usuario/show/{id}', 'UsersController@show')->middleware('auth');//faltando tela
Route::put('usuario/delete/{id}', 'UsersController@destroy')->middleware('auth');//mudar para exclusao logica
Route::get('usuario/edit/{id}', 'UsersController@edit')->middleware('auth');// arrumar
Route::put('usuario/update/{id}', 'UsersController@update')->middleware('auth');// arrumar
Route::get('certificado/index', 'UsersController@certificado')->middleware('auth');
/** ------------------------------------------Tipo Usuario(Administrador)-------------------------------------------------------------------------
 */

Route::get('usuario/tipo/cad', 'TypeUsersController@form_cad')->middleware('auth');// arrumar
Route::get('usuario/tipo/index', 'TypeUsersController@index')->middleware('auth');
Route::post('usuario/tipo/store', 'TypeUsersController@store')->middleware('auth');//arrumar
Route::get('usuario/tipo/show/{id}', 'TypeUsersController@show')->middleware('auth');//ta sem tela
Route::put('usuario/tipo/delete/{id}', 'TypeUsersController@destroy')->middleware('auth');//mudar para exclusao logica
Route::get('usuario/tipo/edit/{id}', 'TypeUsersController@edit')->middleware('auth');// arrumar falta autorização
Route::put('usuario/tipo/update/{id}', 'TypeUsersController@update')->middleware('auth'); //arrumar
/** ------------------------------------------Tipo Atividade(Administrador)-------------------------------------------------------------------------
 */
Route::get('atividade/tipo/cad', 'TypeActivitiesController@form_cad')->middleware('auth');
Route::get('atividade/tipo/index', 'TypeActivitiesController@index')->middleware('auth');//tira o if pra mostra as atividade desativadas
Route::post('atividade/tipo/store', 'TypeActivitiesController@store')->middleware('auth');//redirecionar pra index
Route::get('atividade/tipo/show/{id}', 'TypeActivitiesController@show')->middleware('auth');//ta sem tela
Route::put('atividade/tipo/delete/{id}', 'TypeActivitiesController@destroy')->middleware('auth');
Route::get('atividade/tipo/edit/{id}', 'TypeActivitiesController@edit')->middleware('auth');
Route::put('atividade/tipo/update/{id}', 'TypeActivitiesController@update')->middleware('auth');
/** ------------------------------------------Tipo Atividade Usuario(Administrador)-------------------------------------------------------------------------
 */
Route::get('usuario/tipo/atividade/cad', 'TypeActivityUsersController@form_cad')->middleware('auth');//arrumar
Route::get('usuario/tipo/atividade/index', 'TypeActivityUsersController@index')->middleware('auth');//corrigir rotas
Route::post('usuario/tipo/atividade/store', 'TypeActivityUsersController@store')->middleware('auth');//arrumar
Route::get('usuario/tipo/atividade/show/{id}', 'TypeActivityUsersController@show')->middleware('auth');//sem tela
Route::put('usuario/tipo/atividade/delete/{id}', 'TypeActivityUsersController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('usuario/tipo/atividade/edit/{id}', 'TypeActivityUsersController@edit')->middleware('auth');//faltando
Route::put('usuario/tipo/atividade/update/{id}', 'TypeActivityUsersController@update')->middleware('auth');//faltanto
/** ------------------------------------------Instituiçoes(Administrador)-------------------------------------------------------------------------
 */
Route::get('instituicao/cad', 'InstutionsController@form_cad')->middleware('auth');
Route::get('instituicao/index', 'InstutionsController@index')->middleware('auth');//mostra os desativo.
Route::post('instituicao/store', 'InstutionsController@store')->middleware('auth');// redirecionar pra index
Route::get('instituicao/show/{id}', 'InstutionsController@show')->middleware('auth');//sem tela
Route::put('instituicao/delete/{id}', 'InstutionsController@destroy')->middleware('auth');
Route::get('instituicao/edit/{id}', 'InstutionsController@edit')->middleware('auth');
Route::put('instituicao/update/{id}', 'InstutionsController@update')->middleware('auth');
/** ------------------------------------------Curso(Administrador)-------------------------------------------------------------------------
 */
Route::get('curso/cad','CoursesController@form_cad')->middleware('auth');
Route::get('curso/index','CoursesController@index')->middleware('auth');// mudar pra exibir todos
Route::post('curso/store', 'CoursesController@store')->middleware('auth');// redirecionar pra index
Route::get('curso/show/{id}', 'CoursesController@show')->middleware('auth');//
Route::put('curso/delete/{id}', 'CoursesController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('curso/edit/{id}', 'CoursesController@edit')->middleware('auth');
Route::put('curso/update/{id}', 'CoursesController@update')->middleware('auth');//redirecionar pra index
/** ------------------------------------------Participacao(Administrador)-------------------------------------------------------------------------
 */
Route::get('participacao/cad', 'ParticipationsController@form_cad')->middleware('auth');
Route::get('participacao/index', 'ParticipationsController@index')->middleware('auth');//mostra os que estao desativado
Route::post('participacao/store', 'ParticipationsController@store')->middleware('auth');//redirecionar pra index
Route::get('participacao/show/{id}', 'ParticipationsController@show')->middleware('auth');//sem tela
Route::put('participacao/delete/{id}', 'ParticipationsController@destroy')->middleware('auth');
Route::get('participacao/edit/{id}', 'ParticipationsController@edit')->middleware('auth');
Route::put('participacao/update/{id}', 'ParticipationsController@update')->middleware('auth');//redirecionar pra index
/** ------------------------------------------Artigos(Administrador)-------------------------------------------------------------------------
 */
Route::get('artigo/cad', 'ArticlesController@form_cad')->middleware('auth');//arrumar
Route::get('artigo/index', 'ArticlesController@index')->middleware('auth');//mostrar os que estao desativo
Route::post('artigo/store', 'ArticlesController@store')->middleware('auth');//arrumar
Route::get('artigo/show/{id}', 'ArticlesController@show')->middleware('auth');//sem tela
Route::put('artigo/delete/{id}', 'ArticlesController@destroy')->middleware('auth');//mudar para exclusao logica
Route::get('artigo/edit/{id}', 'ArticlesController@edit')->middleware('auth');//arrumar
Route::put('artigo/update/{id}', 'ArticlesController@update')->middleware('auth');//arrumar
/** ------------------------------------------Eventos(Administrador)-------------------------------------------------------------------------
 */
Route::get('evento/cad', 'EventsController@form_cad')->middleware('auth');// feito
Route::get('evento/index', 'EventsController@index')->middleware('auth');// feito
Route::post('evento/store', 'EventsController@store')->middleware('auth');//fazendo
Route::get('evento/show/{id}', 'EventsController@show')->middleware('auth');//feito
Route::post('evento/inscricao_evento/{id}', 'EventsController@insc_evento')->middleware('auth');//feito
Route::post('evento/detalhar_evento/{id}', 'EventsController@insc_evento')->middleware('auth');//feito ///
Route::put('evento/delete/{id}', 'EventsController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('evento/edit/{id}', 'EventsController@edit')->middleware('auth');
Route::put('evento/update/{id}', 'EventsController@update')->middleware('auth');
Route::get('evento/eventos', 'EventsController@evento_user')->middleware('auth');// feito
/** ------------------------------------------Atividade(Administrador)-------------------------------------------------------------------------
 */
Route::get('evento/{id_evento}/atividade/atividades', 'ActivitiesController@atividade_user')->middleware('auth');// feito
Route::get('evento/{id_evento}/atividade/cad', 'ActivitiesController@form_cad')->middleware('auth');// feito
Route::get('evento/{id_evento}/atividade/insc_atividade', 'ActivitiesController@form_insc_atividade')->middleware('auth');// feito
Route::get('evento/{id_evento}/atividade/index', 'ActivitiesController@index')->middleware('auth');// feito
Route::post('evento/{id_evento}/atividade/store', 'ActivitiesController@store')->middleware('auth');//fazendo
Route::get('evento/{id_evento}/atividade/show/{id}', 'ActivitiesController@show')->middleware('auth');//feito
Route::put('evento/{id_evento}/atividade/delete/{id}', 'ActivitiesController@destroy')->middleware('auth');//feito obs: mudar para exclusao logica
Route::get('evento/{id_evento}/atividade/edit/{id}', 'ActivitiesController@edit')->middleware('auth');
Route::put('evento/{id_evento}/atividade/update/{id}', 'ActivitiesController@update')->middleware('auth');
Route::post('evento/{id_evento}/atividade/insc_atividade/{id}', 'ActivitiesController@insc_atividade')->middleware('auth');//feito

/** ------------------------------------------Eventos(Usuario)-------------------------------------------------------------------------
 */
Route::post('evento/inscricao_evento/{id}', 'EventsController@insc_evento')->middleware('auth');//feito
Route::post('evento/detalhar_evento/{id}', 'EventsController@insc_evento')->middleware('auth');//feito ///
Route::get('evento/eventos', 'EventsController@evento_user')->middleware('auth');// feito
/** ------------------------------------------Atividade(Usuario)-------------------------------------------------------------------------
 */
Route::get('evento/{id_evento}/atividade/atividades', 'ActivitiesController@atividade_user')->middleware('auth');// feito
Route::get('evento/{id_evento}/atividade/insc_atividade', 'ActivitiesController@form_insc_atividade')->middleware('auth');// feito
Route::post('evento/{id_evento}/atividade/insc_atividade/{id}', 'ActivitiesController@insc_atividade')->middleware('auth');//feito


/** ------------------------------------------Token Jonas(Administrador)-------------------------------------------------------------------------
 */

// Obs: as outras tabelas assegir sao tabelas n pra n

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




