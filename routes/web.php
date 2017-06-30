<?php
/** ------------------------------------------Auth-------------------------------------------------------------------------
 */
Auth::routes();
/** ------------------------------------------Home-------------------------------------------------------------------------
 */
Route::get('/sciec/home', 'HomeController@welcome')->middleware('auth');
Route::get('/sciec/', 'HomeController@welcome')->middleware('auth');
Route::get('/sciec/admin', 'HomeController@admin')->middleware('admin');

/** ------------------------------------------Usuario (Administrador)-------------------------------------------------------------------------
 */
Route::get('/sciec/usuario/cad', 'UsersController@form_cad')->middleware('admin');// Selecionar tipo de Usuario.
Route::get('/sciec/usuario/index', 'UsersController@index')->middleware('admin');
Route::post('/sciec/usuario/store', 'UsersController@store')->middleware('admin');//arrumar
Route::get('/sciec/usuario/show/{id}', 'UsersController@show')->middleware('admin');//faltando tela
Route::put('/sciec/usuario/delete/{id}', 'UsersController@destroy')->middleware('admin');//mudar para exclusao logica
Route::get('/sciec/usuario/edit/{id}', 'UsersController@edit')->middleware('admin');// arrumar
Route::put('/sciec/usuario/update/{id}', 'UsersController@update')->middleware('admin');// arrumar
Route::get('/sciec/certificado/index', 'UsersController@certificado')->middleware('admin');
Route::get('/sciec/certificado/cad', 'UsersController@cad_certificado')->middleware('admin');
Route::get('/sciec/frequencia/index', 'UsersController@frequencia')->middleware('admin');

/** ------------------------------------------Tipo Usuario(Administrador)-------------------------------------------------------------------------
 */

Route::get('/sciec/usuario/tipo/cad', 'TypeUsersController@form_cad')->middleware('admin');// arrumar
Route::get('/sciec/usuario/tipo/index', 'TypeUsersController@index')->middleware('admin');
Route::post('/sciec/usuario/tipo/store', 'TypeUsersController@store')->middleware('admin');//arrumar
Route::get('/sciec/usuario/tipo/show/{id}', 'TypeUsersController@show')->middleware('admin');//ta sem tela
Route::put('/sciec/usuario/tipo/delete/{id}', 'TypeUsersController@destroy')->middleware('admin');//mudar para exclusao logica
Route::get('/sciec/usuario/tipo/edit/{id}', 'TypeUsersController@edit')->middleware('admin');// arrumar falta autorização
Route::put('/sciec/usuario/tipo/update/{id}', 'TypeUsersController@update')->middleware('admin'); //arrumar
/** ------------------------------------------Tipo Atividade(Administrador)-------------------------------------------------------------------------
 */
Route::get('/sciec/atividade/tipo/cad', 'TypeActivitiesController@form_cad')->middleware('admin');
Route::get('/sciec/atividade/tipo/index', 'TypeActivitiesController@index')->middleware('admin');//tira o if pra mostra as atividade desativadas
Route::post('/sciec/atividade/tipo/store', 'TypeActivitiesController@store')->middleware('admin');//redirecionar pra index
Route::get('/sciec/atividade/tipo/show/{id}', 'TypeActivitiesController@show')->middleware('admin');//ta sem tela
Route::put('/sciec/atividade/tipo/delete/{id}', 'TypeActivitiesController@destroy')->middleware('admin');
Route::get('/sciec/atividade/tipo/edit/{id}', 'TypeActivitiesController@edit')->middleware('admin');
Route::put('/sciec/atividade/tipo/update/{id}', 'TypeActivitiesController@update')->middleware('admin');
/** ------------------------------------------Tipo Atividade Usuario(Administrador)-------------------------------------------------------------------------
 */
Route::get('/sciec/usuario/tipo/atividade/cad', 'TypeActivityUsersController@form_cad')->middleware('admin');//arrumar
Route::get('/sciec/usuario/tipo/atividade/index', 'TypeActivityUsersController@index')->middleware('admin');//corrigir rotas
Route::post('/sciec/usuario/tipo/atividade/store', 'TypeActivityUsersController@store')->middleware('admin');//arrumar
Route::get('/sciec/usuario/tipo/atividade/show/{id}', 'TypeActivityUsersController@show')->middleware('admin');//sem tela
Route::put('/sciec/usuario/tipo/atividade/delete/{id}', 'TypeActivityUsersController@destroy')->middleware('admin');//feito obs: mudar para exclusao logica
Route::get('/sciec/usuario/tipo/atividade/edit/{id}', 'TypeActivityUsersController@edit')->middleware('admin');//faltando
Route::put('/sciec/usuario/tipo/atividade/update/{id}', 'TypeActivityUsersController@update')->middleware('admin');//faltanto
/** ------------------------------------------Instituiçoes(Administrador)-------------------------------------------------------------------------
 */
Route::get('/sciec/instituicao/cad', 'InstutionsController@form_cad')->middleware('admin');
Route::get('/sciec/instituicao/index', 'InstutionsController@index')->middleware('admin');//mostra os desativo.
Route::post('/sciec/instituicao/store', 'InstutionsController@store')->middleware('admin');// redirecionar pra index
Route::get('/sciec/instituicao/show/{id}', 'InstutionsController@show')->middleware('admin');//sem tela
Route::put('/sciec/instituicao/delete/{id}', 'InstutionsController@destroy')->middleware('admin');
Route::get('/sciec/instituicao/edit/{id}', 'InstutionsController@edit')->middleware('admin');
Route::put('/sciec/instituicao/update/{id}', 'InstutionsController@update')->middleware('admin');
/** ------------------------------------------Curso(Administrador)-------------------------------------------------------------------------
 */
Route::get('/sciec/curso/cad','CoursesController@form_cad')->middleware('admin');
Route::get('/sciec/curso/index','CoursesController@index')->middleware('admin');// mudar pra exibir todos
Route::post('/sciec/curso/store', 'CoursesController@store')->middleware('admin');// redirecionar pra index
Route::get('/sciec/curso/show/{id}', 'CoursesController@show')->middleware('admin');//
Route::put('/sciec/curso/delete/{id}', 'CoursesController@destroy')->middleware('admin');//feito obs: mudar para exclusao logica
Route::get('/sciec/curso/edit/{id}', 'CoursesController@edit')->middleware('admin');
Route::put('/sciec/curso/update/{id}', 'CoursesController@update')->middleware('admin');//redirecionar pra index
/** ------------------------------------------Participacao(Administrador)-------------------------------------------------------------------------
 */
Route::get('/sciec/participacao/cad', 'ParticipationsController@form_cad')->middleware('admin');
Route::get('/sciec/participacao/index', 'ParticipationsController@index')->middleware('admin');//mostra os que estao desativado
Route::post('/sciec/participacao/store', 'ParticipationsController@store')->middleware('admin');//redirecionar pra index
Route::get('/sciec/participacao/show/{id}', 'ParticipationsController@show')->middleware('admin');//sem tela
Route::put('/sciec/participacao/delete/{id}', 'ParticipationsController@destroy')->middleware('admin');
Route::get('/sciec/participacao/edit/{id}', 'ParticipationsController@edit')->middleware('admin');
Route::put('/sciec/participacao/update/{id}', 'ParticipationsController@update')->middleware('admin');//redirecionar pra index
/** ------------------------------------------Artigos(Administrador)-------------------------------------------------------------------------
 */
Route::get('/sciec/artigo/cad', 'ArticlesController@form_cad')->middleware('admin');//arrumar
Route::get('/sciec/artigo/index', 'ArticlesController@index')->middleware('admin');//mostrar os que estao desativo
Route::post('/sciec/artigo/store', 'ArticlesController@store')->middleware('admin');//arrumar
Route::get('/sciec/artigo/show/{id}', 'ArticlesController@show')->middleware('admin');//sem tela
Route::put('/sciec/artigo/delete/{id}', 'ArticlesController@destroy')->middleware('admin');//mudar para exclusao logica
Route::get('/sciec/artigo/edit/{id}', 'ArticlesController@edit')->middleware('admin');//arrumar
Route::put('/sciec/artigo/update/{id}', 'ArticlesController@update')->middleware('admin');//arrumar
/** ------------------------------------------Eventos(Administrador)-------------------------------------------------------------------------
 */
Route::get('/sciec/evento/cad', 'EventsController@form_cad')->middleware('admin');// feito
Route::get('/sciec/evento/index', 'EventsController@index')->middleware('admin');// feito
Route::post('/sciec/evento/store', 'EventsController@store')->middleware('admin');//fazendo
Route::post('/sciec/evento/inscricao_evento/{id}', 'EventsController@insc_evento')->middleware('auth');//feito
Route::post('/sciec/evento/detalhar_evento/{id}', 'EventsController@insc_evento')->middleware('auth');//feito ///
Route::put('/sciec/evento/delete/{id}', 'EventsController@destroy')->middleware('admin');//feito obs: mudar para exclusao logica
Route::get('/sciec/evento/edit/{id}', 'EventsController@edit')->middleware('admin');
Route::put('/sciec/evento/update/{id}', 'EventsController@update')->middleware('admin');
Route::get('/sciec/evento/eventos', 'EventsController@evento_user')->middleware('auth');// feito
/** ------------------------------------------Atividade(Administrador)-------------------------------------------------------------------------
 */
Route::get('/sciec/evento/{id_evento}/atividade/atividades', 'ActivitiesController@atividade_user')->middleware('admin');// feito
Route::get('/sciec/evento/{id_evento}/atividade/cad', 'ActivitiesController@form_cad')->middleware('admin');// feito
Route::get('/sciec/evento/{id_evento}/atividade/frequencia/{id}', 'ActivitiesController@lista_user_atividade')->middleware('admin');// feito
Route::get('/sciec/evento/{id_evento}/atividade/index', 'ActivitiesController@index')->middleware('admin');// feito
Route::post('/sciec/evento/{id_evento}/atividade/store', 'ActivitiesController@store')->middleware('admin');//fazendo
Route::get('/sciec/evento/{id_evento}/atividade/show/{id}', 'ActivitiesController@show')->middleware('admin');//feito
Route::put('/sciec/evento/{id_evento}/atividade/delete/{id}', 'ActivitiesController@destroy')->middleware('admin');//feito obs: mudar para exclusao logica
Route::get('/sciec/evento/{id_evento}/atividade/edit/{id}', 'ActivitiesController@edit')->middleware('admin');
Route::put('/sciec/evento/{id_evento}/atividade/update/{id}', 'ActivitiesController@update')->middleware('admin');
Route::put('/sciec/evento/{id_evento}/atividade/{id_atividade}/presenca/{id}', 'ActivitiesController@presenca')->middleware('admin');// feito
Route::put('/sciec/evento/{id_evento}/atividade/{id_atividade}/entrada/{id}', 'ActivitiesController@entrada')->middleware('admin');
Route::put('/sciec/evento/{id_evento}/atividade/{id_atividade}/saida/{id}', 'ActivitiesController@saida')->middleware('admin');
/** ------------------------------------------Eventos(Usuario)-------------------------------------------------------------------------
 */
Route::post('/sciec/evento/inscricao_evento/{id}', 'EventsController@insc_evento')->middleware('auth');//feito
Route::post('/sciec/evento/detalhar_evento/{id}', 'EventsController@insc_evento')->middleware('auth');//feito ///
Route::get('/sciec/evento/eventos', 'EventsController@evento_user')->middleware('auth');// feito
Route::get('/sciec/evento/show/{id}', 'EventsController@show')->middleware('auth');//feitos
/** ------------------------------------------Atividade(Usuario)-------------------------------------------------------------------------
 */
Route::get('/sciec/evento/{id_evento}/atividade/atividades', 'ActivitiesController@atividade_user')->middleware('auth');// feito
Route::get('/sciec/evento/{id_evento}/atividade/insc_atividade', 'ActivitiesController@form_insc_atividade')->middleware('auth');// feito
Route::post('/sciec/evento/{id_evento}/atividade/insc_atividade/{id}', 'ActivitiesController@insc_atividade')->middleware('auth');//feito
Route::get('/sciec/evento/{id_evento}/atividade/lista', 'ActivitiesController@index')->middleware('auth');// feito


/** ------------------------------------------Token Jonas(Administrador)-------------------------------------------------------------------------
 */

Route::get('/sciec/evento/{id_evento}/frequencia/', 'EventsController@lista_user_evento')->middleware('admin');// feito

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

Route::get('/sciec/evento/{id_evento}/atividade/{id}/pdf2', function () {
   // $AtividadeUser = new ActivityUser();
   // $AtividadeUser->id_users = Auth::user()->id;
   // $AtividadeUser->id_activity = $id;
   // $AtividadeUser->id_type_activity_user = 1;
   // $retorno=$AtividadeUser->certificado();

// foreach ($retorno as $r){
//     echo 'participante: '.$r->name .' no evento: '.$r->nome.' no periodo de: '.$r->data_inicio.' ate '. $r->data_conclusao.' no '.$r->local.' Quantidade de Horas '.$r->hora;
//return view('certificado.pdf');
    $pdf = PDF::loadView('certificado.pdf')->setPaper('a4', 'landscape');
    return $pdf->stream('meucertificado.pdf');

})->middleware('auth');

Route::get('/sciec/evento/{id_evento}/pdf','ActivitiesController@pdf');









