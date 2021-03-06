<?php

namespace App\Http\Controllers;

use App\Entities\Course;
use App\Entities\Event;
use App\Entities\User;
use App\Entities\UserEvent;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\EventCreateRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Repositories\EventRepository;
use App\Validators\EventValidator;
use Psy\Util\Json;


class EventsController extends Controller
{


    /** ------------------------------------------Importando Repository Evento-------------------------------------------------------------------------
     */
    protected $repository;

    /** ------------------------------------------Importando Repository Validator-------------------------------------------------------------------------
     */
    protected $validator;

    /** ------------------------------------------Contruct-------------------------------------------------------------------------
     */
    public function __construct(EventRepository $repository, EventValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->middleware('auth');

    }


    /** ------------------------------------------INDEX-------------------------------------------------------------------------
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $events = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $events,
            ]);
        }

        return view('evento.list_evento', compact('events'));
    }


    /** ------------------------------------------Store-------------------------------------------------------------------------
     */
    public function store(Request $request)
    {

       /* $file = $request->file('logoEvento');
        if($request->hasFile('logoEvento') && $file->isValid()) {
            $destinationPath = 'assets/img/events/';
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $file->move($destinationPath, $fileName); // uploading file to given path
        }



        if (isset($fileName)){ $fileName;

      $request['logoEvento']=$fileName;

        }
       */
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $event = $this->repository->create($request->all());

            $response = [
                'message' => 'Event created.',
                'data'    => $event->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('evento/index');
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /** ------------------------------------------Show-------------------------------------------------------------------------
     */
    public function show($id)
    {
        $events = $this->repository->find($id);
        $userEvent=new UserEvent();
        $verifica=$userEvent->validaEvento($id, Auth::user()->id);
        if($verifica==false){
            return redirect('evento/'.$id.'/atividade/insc_atividade');
        }
        if (request()->wantsJson()) {

            return response()->json([
              'data' => $events,
           ]);
      }

        return view('evento.exibir_evento',compact('events'));
    }


    /** ------------------------------------------Edit-------------------------------------------------------------------------
     */
    public function edit($id)
    {
        $titulo = "Editar Evento";

        $event = $this->repository->find($id);

        return view('evento.create-edit', compact('titulo','event'));
    }


    /** ------------------------------------------Updade-------------------------------------------------------------------------
     */
    public function update(Request $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $event = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Event updated.',
                'data'    => $event->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('evento/index');
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /** ------------------------------------------Destroy Logic-------------------------------------------------------------------------
     */
    public function destroy(Request $request, $id)
    {
        $dataForm = $request->all();
        $event = Event::find($id);
        $update = $event->update($dataForm);

        if($update){
            return redirect('evento/index');
        }
    }

    /** ------------------------------------------Form_Cadastro-------------------------------------------------------------------------
     */
    public function form_cad()
    {
        $titulo = "Cadastrar Evento";
        return view('evento.create-edit', compact('titulo'));
    }


    /** ------------------------------------------Exibir Evento-------------------------------------------------------------------------
     */
    public function exibir_evento()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $events = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $events,
            ]);
        }

        return view('evento.list_evento', compact('events'));
    }

    /** ------------------------------------------Inscrição Na Atividade-------------------------------------------------------------------------
     */

    public function insc_evento($id){

        $userEvent= new UserEvent();
        $userEvent->id_users = Auth::user()->id;
        $userEvent->id_evento = $id;
        $userEvent->id_articles=1;
        $userEvent->id_participation=1;
        $userEvent->status=1;
        if($userEvent->valida()){
            $userEvent->save();
            return redirect('evento/eventos');
        }else{
            return redirect('evento/show/'.$id);
        }

    }

    /** ------------------------------------------Eventos do Usuario-------------------------------------------------------------------------
     */

    public function evento_user(){

        $User= new User();
        $User->id=Auth::user()->id;
        $events=$User->evento()->get()->all();
        return view('evento.list_meus_eventos', compact('events'));

    }
    public function lista_user_evento($id_evento){
        $atividadeUser = new UserEvent();
        $lista=$atividadeUser->lista_de_userEvento($id_evento);
        return view('evento.frequencia_evento', compact('lista','id_evento','id'));

    }
    public function detalhe_user_evento($id_evento){
        $atividadeUser = new UserEvent();
        $certificado=$atividadeUser->lista_detalhesevento($id_evento,Auth::user()->id);
        $pdf = \PDF::loadView('certificado.comprovante_pdf',compact('certificado'))->setPaper('a4');
        return $pdf->stream('listaEvento.pdf');

    }
    public function lista_user_evento_pdf($id_evento){
        $atividadeUser = new UserEvent();
        $lista=$atividadeUser->lista_de_userEvento($id_evento);
        $pdf = \PDF::loadView('evento.evento_list_pdf',compact('lista'))->setPaper('a4', 'landscape');
        return $pdf->stream('listaEvento.pdf');
    }
}
