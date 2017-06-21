<?php

namespace App\Http\Controllers;

use App\Entities\Activity;
use App\Entities\ActivityUser;
use App\Entities\Event;
use App\Entities\TypeActivity;
use App\Entities\User;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ActivityCreateRequest;
use App\Http\Requests\ActivityUpdateRequest;
use App\Repositories\ActivityRepository;
use App\Validators\ActivityValidator;


class ActivitiesController extends Controller
{

    /** ------------------------------------------Import Repository Atividade-------------------------------------------------------------------------
     */
    protected $repository;
    /** ------------------------------------------Import Validator Atividade-------------------------------------------------------------------------
     */
    protected $validator;
    /** ------------------------------------------Construct-------------------------------------------------------------------------
     */
    public function __construct(ActivityRepository $repository, ActivityValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->middleware('auth');
    }
    /** ------------------------------------------Index-------------------------------------------------------------------------
     */
    public function index($id)
    {
        $atividade = Activity::all();

        $activities = $atividade->where('id_evento', '=', $id);
        $atividadeUser = new ActivityUser();
        $id_evento=$id;


        return view('atividade.list_atividade', compact('activities','atividadeUser','id_evento'));
    }

    /** ------------------------------------------Store-------------------------------------------------------------------------
     */
    public function store(Request $request,$id_evento)
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

            return redirect('evento/'.$id_evento.'/atividade/index');
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
        $activity = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $activity,
            ]);
        }

        return view('atividade.list_atividade', compact('activity'));
    }

    /** ------------------------------------------Edit-------------------------------------------------------------------------
     */
    public function edit($id_evento,$id)
    {


        $tipoAtividade=TypeActivity::all();
        $evento = Event::find($id_evento);

        $activity = $this->repository->find($id);
        return view('atividade.create-edit', compact('activity','evento','tipoAtividade'));
    }

    /** ------------------------------------------Update-------------------------------------------------------------------------
     */
    public function update(Request $request, $id_evento,$id)
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

            return redirect('evento/'.$id_evento.'/atividade/index');
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
    public function destroy(Request $request,$id_evento,$id)
    {
        $dataForm = $request->all();
        $atividade = Activity::find($id);
        $update = $atividade->update($dataForm);

        if($update){
            return redirect('evento/'.$id_evento.'/atividade/index');
        }

    }
    /** ------------------------------------------Entrada-------------------------------------------------------------------------
     */
    public function entrada(Request $request,$id_evento,$id)
    {   //tem que arrumar

            return redirect('evento/'.$id_evento.'/atividade/frequencia/'.$id);

    }
    /** ------------------------------------------Sainda-------------------------------------------------------------------------
     */
    public function saida(Request $request,$id_evento,$id)
    {   //tem que arrumar

        return redirect('evento/'.$id_evento.'/atividade/frequencia/'.$id);

    }
    /** ------------------------------------------Presença-------------------------------------------------------------------------
     */
    public function presenca(Request $request,$id_evento,$id_atividade,$id)
    {
        $dataForm = ['presenca'=>$request->input('presenca')];
        $atividade=ActivityUser::find($id);
        $update = $atividade->update($dataForm);
        if($update) {
            return redirect('evento/' . $id_evento . '/atividade/frequencia/' . $id_atividade);
        }
    }

    /** ------------------------------------------Formulario Cadastro-------------------------------------------------------------------------
     */
    public function form_cad($id)
    {
        $tipoAtividade=TypeActivity::all();
        $evento=Event::find($id);
        return view('atividade.create-edit',compact('tipoAtividade','evento'));
    }
    /** ------------------------------------------Formulario Inscrição Atividade-------------------------------------------------------------------------
     */
    public function form_insc_atividade($id)
    {
        $atividade = Activity::all();

        $activities = $atividade->where('id_evento', '=', $id);
        $id_user=Auth::user()->id;
        $id_evento=$id;
        $atividadeUser = new ActivityUser();
       /* if($activities!=''){

            $teste=$atividadeUser->colisaoAtividade($id_evento);
            $lista=[1,2,3];
            for ($i=0;$i<count($lista);$i++){
                for($j=0;$j<count($lista);$j++){
                    if($lista[$i]!=$lista[$j]){
                        $a=$lista[$i];
                        $b=$lista[$j];
                        foreach ($teste as $te=>$va){
                            if($te==$a) {
                                foreach ($va as $temp => $item) {
                                    if($item==$b){
                                        echo "colizao:".$a." e :".$b ."</br>";
                                    }
                                }
                            }
                        }
                    }
                }
            }
            return view('atividade.insc_atividade',compact('activities','atividadeUser','id_user','id_evento'));

        }*/
        return view('atividade.insc_atividade',compact('activities','atividadeUser','id_user','id_evento'));


    }


    /** ------------------------------------------Lista de ATividade do Usuario-------------------------------------------------------------------------
     */
    public function atividade_user($id_evento){
        $User= new User();
        $User->id=Auth::user()->id;
        $activities=$User->atividade()->get()->all();
        $evento= Event::find($id_evento)->get();

        foreach($evento as $e){
        $status=$e->status;

        }

        return view('atividade.minhas_atividade', compact('activities','id_evento','status'));

    }
    /** ------------------------------------------Inscrição de Atividade-------------------------------------------------------------------------
     */
    public function insc_atividade(Request $request)
    {
        date_default_timezone_set('America/Araguaina');

        $id_evento = $request->input('id_evento');
        $count=0;
        foreach ($request->input('id_atividade') as $id_atividade) {
        $AtividadeUser = new ActivityUser();
        $AtividadeUser->id_users = Auth::user()->id;
        $AtividadeUser->id_activity = $id_atividade;
        $AtividadeUser->id_type_activity_user = 1;
        $AtividadeUser->status = 1;
        $AtividadeUser->data_entrada =Date('Y-m-d H:i:s');
        $AtividadeUser->data_saida = Date('Y-m-d H:i:s');
        $AtividadeUser->presenca = 0;
        if ($AtividadeUser->valida()) {
            $AtividadeUser->save();
            $count++;
        }
    };
        if($count>0){
            return redirect('evento/'.$id_evento.'/atividade/atividades');
        }else{
            return redirect('evento/show/'.$id_evento);
        }
    }
    /** ------------------------------------------Lista de Usuario na atividade------------------------------------------------------------------------
     */
    public function lista_user_atividade($id_evento,$id){
        $atividadeUser = new ActivityUser();
        $lista=$atividadeUser->listaAtividade($id,1);

        return view('atividade.frequencia_atividade', compact('lista','id_evento','id'));

    }

    public function PDF($id_evento,$id){

    }



}
