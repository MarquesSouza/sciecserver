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
    public function edit($id)
    {

        $activity = $this->repository->find($id);

        return view('activities.edit', compact('activity'));
    }

    /** ------------------------------------------Update-------------------------------------------------------------------------
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
    /** ------------------------------------------Destroy Logic-------------------------------------------------------------------------
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

    /** ------------------------------------------Formulario Cadastro-------------------------------------------------------------------------
     */
    public function form_cad()
    {
        $tipoAtividade=TypeActivity::all();
        return view('atividade.cad_atividade',compact('tipoAtividade'));
    }
    /** ------------------------------------------Formulario Inscrição Atividade-------------------------------------------------------------------------
     */
    public function form_insc_atividade($id)
    {
        $atividade = Activity::all();

        $activities = $atividade->where('id_evento', '=', $id);
        $id_user=Auth::user()->id;
        $id_evento=$id;
        if($activities==''){
            $atividadeUser = new ActivityUser();
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

        }
        return view('atividade.insc_atividade',compact('activities','atividadeUser','id_user','id_evento'));


    }


    /** ------------------------------------------Lista de ATividade do Usuario-------------------------------------------------------------------------
     */
    public function atividade_user(){
        $User= new User();
        $User->id=Auth::user()->id;
        $activities=$User->atividade()->get()->all();


        return view('atividade.list_atividade', compact('activities'));

    }
    /** ------------------------------------------Inscrição de Atividade-------------------------------------------------------------------------
     */
    public function insc_atividade($id_evento,$id){

        $AtividadeUser= new ActivityUser();
        $AtividadeUser->id_users = Auth::user()->id;
        $AtividadeUser->id_activity=$id;
        $AtividadeUser->id_type_activity_user=1;
        $AtividadeUser->status=1;
        $AtividadeUser->data_entrada="2017-07-03 00:00:00";
        $AtividadeUser->data_saida="2017-07-03 00:00:00";
        $AtividadeUser->presenca=1;
        if($AtividadeUser->valida()){
            $AtividadeUser->save();
            return redirect('evento/'.$id_evento.'/atividade/show/'.$id);
        }else{

            return redirect('evento/show/'.$id);

            //pagina para mensagem que ja ta cadastrador
        }

    }
    /** ------------------------------------------Lista de Usuario na atividade------------------------------------------------------------------------
     */
    public function lista_user_atividade(){
        $atividadeUser = new ActivityUser();
        $lista=$atividadeUser->listaAtividade(3,1);

        return view('atividade.list_atividade', compact('activities'));

    }



}
