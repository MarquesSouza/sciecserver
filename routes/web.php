<?php
/** ------------------------------------------Auth-------------------------------------------------------------------------
 */
Auth::routes();
/** ------------------------------------------Home-------------------------------------------------------------------------
 */
Route::get('/home', 'HomeController@welcome')->middleware('auth');
Route::get('/', 'HomeController@welcome')->middleware('auth');
Route::get('/admin', 'HomeController@admin')->middleware('admin');

/** ------------------------------------------Usuario (Administrador)-------------------------------------------------------------------------
 */
Route::get('usuario/cad', 'UsersController@form_cad')->middleware('admin');// Selecionar tipo de Usuario.
Route::get('usuario/index', 'UsersController@index')->middleware('admin');
Route::post('usuario/store', 'UsersController@store')->middleware('admin');//arrumar
Route::get('usuario/show/{id}', 'UsersController@show')->middleware('admin');//faltando tela
Route::put('usuario/delete/{id}', 'UsersController@destroy')->middleware('admin');//mudar para exclusao logica
Route::get('usuario/edit/{id}', 'UsersController@edit')->middleware('admin');// arrumar
Route::put('usuario/update/{id}', 'UsersController@update')->middleware('admin');// arrumar
Route::get('certificado/index', 'UsersController@certificado')->middleware('admin');
Route::get('certificado/cad', 'UsersController@cad_certificado')->middleware('admin');
Route::get('frequencia/index', 'UsersController@frequencia')->middleware('admin');

/** ------------------------------------------Tipo Usuario(Administrador)-------------------------------------------------------------------------
 */

Route::get('usuario/tipo/cad', 'TypeUsersController@form_cad')->middleware('admin');// arrumar
Route::get('usuario/tipo/index', 'TypeUsersController@index')->middleware('admin');
Route::post('usuario/tipo/store', 'TypeUsersController@store')->middleware('admin');//arrumar
Route::get('usuario/tipo/show/{id}', 'TypeUsersController@show')->middleware('admin');//ta sem tela
Route::put('usuario/tipo/delete/{id}', 'TypeUsersController@destroy')->middleware('admin');//mudar para exclusao logica
Route::get('usuario/tipo/edit/{id}', 'TypeUsersController@edit')->middleware('admin');// arrumar falta autorização
Route::put('usuario/tipo/update/{id}', 'TypeUsersController@update')->middleware('admin'); //arrumar
/** ------------------------------------------Tipo Atividade(Administrador)-------------------------------------------------------------------------
 */
Route::get('atividade/tipo/cad', 'TypeActivitiesController@form_cad')->middleware('admin');
Route::get('atividade/tipo/index', 'TypeActivitiesController@index')->middleware('admin');//tira o if pra mostra as atividade desativadas
Route::post('atividade/tipo/store', 'TypeActivitiesController@store')->middleware('admin');//redirecionar pra index
Route::get('atividade/tipo/show/{id}', 'TypeActivitiesController@show')->middleware('admin');//ta sem tela
Route::put('atividade/tipo/delete/{id}', 'TypeActivitiesController@destroy')->middleware('admin');
Route::get('atividade/tipo/edit/{id}', 'TypeActivitiesController@edit')->middleware('admin');
Route::put('atividade/tipo/update/{id}', 'TypeActivitiesController@update')->middleware('admin');
/** ------------------------------------------Tipo Atividade Usuario(Administrador)-------------------------------------------------------------------------
 */
Route::get('usuario/tipo/atividade/cad', 'TypeActivityUsersController@form_cad')->middleware('admin');//arrumar
Route::get('usuario/tipo/atividade/index', 'TypeActivityUsersController@index')->middleware('admin');//corrigir rotas
Route::post('usuario/tipo/atividade/store', 'TypeActivityUsersController@store')->middleware('admin');//arrumar
Route::get('usuario/tipo/atividade/show/{id}', 'TypeActivityUsersController@show')->middleware('admin');//sem tela
Route::put('usuario/tipo/atividade/delete/{id}', 'TypeActivityUsersController@destroy')->middleware('admin');//feito obs: mudar para exclusao logica
Route::get('usuario/tipo/atividade/edit/{id}', 'TypeActivityUsersController@edit')->middleware('admin');//faltando
Route::put('usuario/tipo/atividade/update/{id}', 'TypeActivityUsersController@update')->middleware('admin');//faltanto
/** ------------------------------------------Instituiçoes(Administrador)-------------------------------------------------------------------------
 */
Route::get('instituicao/cad', 'InstutionsController@form_cad')->middleware('admin');
Route::get('instituicao/index', 'InstutionsController@index')->middleware('admin');//mostra os desativo.
Route::post('instituicao/store', 'InstutionsController@store')->middleware('admin');// redirecionar pra index
Route::get('instituicao/show/{id}', 'InstutionsController@show')->middleware('admin');//sem tela
Route::put('instituicao/delete/{id}', 'InstutionsController@destroy')->middleware('admin');
Route::get('instituicao/edit/{id}', 'InstutionsController@edit')->middleware('admin');
Route::put('instituicao/update/{id}', 'InstutionsController@update')->middleware('admin');
/** ------------------------------------------Curso(Administrador)-------------------------------------------------------------------------
 */
Route::get('curso/cad','CoursesController@form_cad')->middleware('admin');
Route::get('curso/index','CoursesController@index')->middleware('admin');// mudar pra exibir todos
Route::post('curso/store', 'CoursesController@store')->middleware('admin');// redirecionar pra index
Route::get('curso/show/{id}', 'CoursesController@show')->middleware('admin');//
Route::put('curso/delete/{id}', 'CoursesController@destroy')->middleware('admin');//feito obs: mudar para exclusao logica
Route::get('curso/edit/{id}', 'CoursesController@edit')->middleware('admin');
Route::put('curso/update/{id}', 'CoursesController@update')->middleware('admin');//redirecionar pra index
/** ------------------------------------------Participacao(Administrador)-------------------------------------------------------------------------
 */
Route::get('participacao/cad', 'ParticipationsController@form_cad')->middleware('admin');
Route::get('participacao/index', 'ParticipationsController@index')->middleware('admin');//mostra os que estao desativado
Route::post('participacao/store', 'ParticipationsController@store')->middleware('admin');//redirecionar pra index
Route::get('participacao/show/{id}', 'ParticipationsController@show')->middleware('admin');//sem tela
Route::put('participacao/delete/{id}', 'ParticipationsController@destroy')->middleware('admin');
Route::get('participacao/edit/{id}', 'ParticipationsController@edit')->middleware('admin');
Route::put('participacao/update/{id}', 'ParticipationsController@update')->middleware('admin');//redirecionar pra index
/** ------------------------------------------Artigos(Administrador)-------------------------------------------------------------------------
 */
Route::get('artigo/cad', 'ArticlesController@form_cad')->middleware('admin');//arrumar
Route::get('artigo/index', 'ArticlesController@index')->middleware('admin');//mostrar os que estao desativo
Route::post('artigo/store', 'ArticlesController@store')->middleware('admin');//arrumar
Route::get('artigo/show/{id}', 'ArticlesController@show')->middleware('admin');//sem tela
Route::put('artigo/delete/{id}', 'ArticlesController@destroy')->middleware('admin');//mudar para exclusao logica
Route::get('artigo/edit/{id}', 'ArticlesController@edit')->middleware('admin');//arrumar
Route::put('artigo/update/{id}', 'ArticlesController@update')->middleware('admin');//arrumar
/** ------------------------------------------Eventos(Administrador)-------------------------------------------------------------------------
 */
Route::get('evento/cad', 'EventsController@form_cad')->middleware('admin');// feito
Route::get('evento/index', 'EventsController@index')->middleware('admin');// feito
Route::post('evento/store', 'EventsController@store')->middleware('admin');//fazendo
Route::post('evento/inscricao_evento/{id}', 'EventsController@insc_evento')->middleware('auth');//feito
Route::post('evento/detalhar_evento/{id}', 'EventsController@insc_evento')->middleware('auth');//feito ///
Route::put('evento/delete/{id}', 'EventsController@destroy')->middleware('admin');//feito obs: mudar para exclusao logica
Route::get('evento/edit/{id}', 'EventsController@edit')->middleware('admin');
Route::put('evento/update/{id}', 'EventsController@update')->middleware('admin');
Route::get('evento/eventos', 'EventsController@evento_user')->middleware('auth');// feito
/** ------------------------------------------Atividade(Administrador)-------------------------------------------------------------------------
 */
Route::get('evento/{id_evento}/atividade/atividades', 'ActivitiesController@atividade_user')->middleware('admin');// feito
Route::get('evento/{id_evento}/atividade/cad', 'ActivitiesController@form_cad')->middleware('admin');// feito
Route::get('evento/{id_evento}/atividade/frequencia/{id}', 'ActivitiesController@lista_user_atividade')->middleware('admin');// feito
Route::get('evento/{id_evento}/atividade/index', 'ActivitiesController@index')->middleware('admin');// feito
Route::post('evento/{id_evento}/atividade/store', 'ActivitiesController@store')->middleware('admin');//fazendo
Route::get('evento/{id_evento}/atividade/show/{id}', 'ActivitiesController@show')->middleware('admin');//feito
Route::put('evento/{id_evento}/atividade/delete/{id}', 'ActivitiesController@destroy')->middleware('admin');//feito obs: mudar para exclusao logica
Route::get('evento/{id_evento}/atividade/edit/{id}', 'ActivitiesController@edit')->middleware('admin');
Route::put('evento/{id_evento}/atividade/update/{id}', 'ActivitiesController@update')->middleware('admin');
Route::put('evento/{id_evento}/atividade/{id_atividade}/presenca/{id}', 'ActivitiesController@presenca')->middleware('admin');// feito
Route::put('evento/{id_evento}/atividade/{id_atividade}/entrada/{id}', 'ActivitiesController@entrada')->middleware('admin');
Route::put('evento/{id_evento}/atividade/{id_atividade}/saida/{id}', 'ActivitiesController@saida')->middleware('admin');
/** ------------------------------------------Eventos(Usuario)-------------------------------------------------------------------------
 */
Route::post('evento/inscricao_evento/{id}', 'EventsController@insc_evento')->middleware('auth');//feito
Route::post('evento/detalhar_evento/{id}', 'EventsController@insc_evento')->middleware('auth');//feito ///
Route::get('evento/eventos', 'EventsController@evento_user')->middleware('auth');// feito
Route::get('evento/show/{id}', 'EventsController@show')->middleware('auth');//feitos
/** ------------------------------------------Atividade(Usuario)-------------------------------------------------------------------------
 */
Route::get('evento/{id_evento}/atividade/atividades', 'ActivitiesController@atividade_user')->middleware('auth');// feito
Route::get('evento/{id_evento}/atividade/insc_atividade', 'ActivitiesController@form_insc_atividade')->middleware('auth');// feito
Route::post('evento/{id_evento}/atividade/insc_atividade/{id}', 'ActivitiesController@insc_atividade')->middleware('auth');//feito
Route::get('evento/{id_evento}/atividade/lista', 'ActivitiesController@index')->middleware('auth');// feito


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

//PDF

Route::get('pdf', function () {
    $pdf = PDF::loadView('certificado/pdf')->setPaper('a4', 'landscape');
    return $pdf->stream('meucertificado.pdf');
})->middleware('auth');




