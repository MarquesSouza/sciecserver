<?php

namespace App\Http\Controllers;

use App\Entities\Activity;
use App\Entities\ActivityUser;
use App\Entities\Event;
use App\Entities\TypeActivity;
use App\Entities\User;
use App\Entities\UserEvent;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ActivityCreateRequest;
use App\Http\Requests\ActivityUpdateRequest;
use App\Repositories\ActivityRepository;
use App\Validators\ActivityValidator;


class ActivitiesController extends Controller
{

    /**
     * @var ActivityRepository
     */
    protected $repository;

    /**
     * @var ActivityValidator
     */
    protected $validator;

    public function __construct(ActivityRepository $repository, ActivityValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $userEvent= new UserEvent();
        $userEvent->id_users = Auth::user()->id;
        $userEvent->id_evento = $id;
        $userEvent->setAttribute('id_articles',1);
        $userEvent->setAttribute('id_participation',1);
        if($userEvent->valida()){
          //  echo "<script>alert('Parabéns!! Você Não Está Cadastrado No Evento, Escolha a Sua Atividade!');</script>";
            return redirect('evento/show/'.$id);

            //pagina para mensagem que ja ta cadastrador
        }else{
          //  echo "<script>alert('Parabéns!! Você Está Cadastrado No Evento, Escolha a Sua Atividade!');</script>";
        }
        $activities= Activity::all()->where('id_evento','=',$id);


        if (request()->wantsJson()) {

            return response()->json([
                'data' => $activities,
            ]);
        }
        return view('atividade.exibir_atividade', compact('activities'));
    }
    public function insc_atividade($id_evento,$id){

        $activityUser= new ActivityUser();
        $activityUser->id_users= Auth::user()->id;
        $activityUser->id_activity=$id;
        $activityUser->id_type_activity_user=1;
        $activityUser->status=1;
        $activityUser->presenca=0;
        $activityUser->data_entrada="2017-01-01 00:00:00";
        $activityUser->data_saida="2017-01-01 00:00:00";
        if($activityUser->valida()){
            $activityUser->save();
            return redirect('evento/'.$id_evento.'/atividade/index');
        }
        return redirect('evento/'.$id_evento.'/atividade/index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ActivityCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function form_cad()
    {
        $tipoAtividade=TypeActivity::all();
        return view('atividade.cad_atividade',compact('tipoAtividade'));
    }

    public function store(ActivityCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $activity = $this->repository->create($request->all());

            $response = [
                'message' => 'Activity created.',
                'data'    => $activity->toArray(),
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


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id_evento,$id)
    {

        $activities= Activity::all()->where('id','=',$id);


        if (request()->wantsJson()) {

            return response()->json([
                'data' => $activities,
            ]);
        }

        return view('atividade.list_atividade', compact('activities'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $activity = $this->repository->find($id);

        return view('activities.edit', compact('activity'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ActivityUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ActivityUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $activity = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Activity updated.',
                'data'    => $activity->toArray(),
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Activity deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Activity deleted.');
    }
}
