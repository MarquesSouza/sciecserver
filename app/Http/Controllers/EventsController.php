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
    public function store(EventCreateRequest $request)
    {

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

            return redirect()->back()->with('message', $response['message']);
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

        $event = $this->repository->find($id);

        return view('events.edit', compact('event'));
    }


    /** ------------------------------------------Updade-------------------------------------------------------------------------
     */
    public function update(EventUpdateRequest $request, $id)
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

            return redirect()->back()->with('message', $response['message']);
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
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Event deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Event deleted.');
    }

    /** ------------------------------------------Form_Cadastro-------------------------------------------------------------------------
     */
    public function form_cad()
    {
        $cursos= Course::all();
        return view('evento.cad_evento',compact('cursos'));
    }

    /** ------------------------------------------Inscrição Na Atividade-------------------------------------------------------------------------
     */
    public function insc_evento($id){

        $userEvent= new UserEvent();
        $userEvent->id_users = Auth::user()->id;
        $userEvent->id_evento = $id;
        $userEvent->setAttribute('id_articles',1);
        $userEvent->setAttribute('id_participation',1);
        $userEvent->setAttribute('status',1);
        if($userEvent->valida()){
            $userEvent->save();
            return redirect('evento/'.$id.'/atividade/index');
        }else{

            return redirect('evento/show/'.$id);

            //pagina para mensagem que ja ta cadastrador
        }

    }

    /** ------------------------------------------Eventos do Usuario-------------------------------------------------------------------------
     */

    public function evento_user(){
        $User= new User();
        $User->id=Auth::user()->id;
        $events=$User->evento()->get()->all();
        return view('evento.list_evento', compact('events'));

    }
}
