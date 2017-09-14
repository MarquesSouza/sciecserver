<?php

namespace App\Http\Controllers;

use App\Entities\Activity;
use App\Entities\ActivityUser;
use App\Entities\Event;
use App\Entities\TypeActivity;
use App\Entities\TypeActivityUser;
use App\Entities\User;
use App\Entities\UserEvent;
use App\Entities\TypeUser;
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
use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade;
use Barryvdh\DomPDF\ServiceProvider;

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
    public function entrada($id_evento,$id_atividade,$id)
    {
        date_default_timezone_set('America/Araguaina');

        $dataForm = ['data_entrada'=>date('Y-m-d H:i:s')];
        $atividade=ActivityUser::find($id);
        $update = $atividade->update($dataForm);
        if($update) {
            return redirect('evento/'.$id_evento.'/atividade/'.$id_atividade.'/frequencia');
        }
    }

    /** ------------------------------------------Sainda-------------------------------------------------------------------------
     */
    public function saida($id_evento,$id_atividade,$id)
    {
        date_default_timezone_set('America/Araguaina');

        $dataForm = ['data_saida'=>date('Y-m-d H:i:s')];
        $atividade=ActivityUser::find($id);
        $update = $atividade->update($dataForm);
        if($update) {
            return redirect('evento/'.$id_evento.'/atividade/'.$id_atividade.'/frequencia');
        }
    }

    /** ------------------------------------------Presença-------------------------------------------------------------------------
     */
    public function presenca(Request $request,$id_evento,$id_atividade,$id)
    {
        $dataForm = ['presenca'=>$request->input('presenca')];
        $atividade=ActivityUser::find($id);
        $update = $atividade->update($dataForm);
        if($update) {
            return redirect('evento/'.$id_evento.'/atividade/'.$id_atividade.'/frequencia');
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
        $status=0;
        foreach ($activities as $a){
                    if($a->status==1){
                        $status++;
                    }
    }

        return view('atividade.insc_atividade',compact('activities','atividadeUser','id_user','id_evento','status'));


    }


    /** ------------------------------------------Lista de ATividade do Usuario-------------------------------------------------------------------------
     */
    public function atividade_user($id_evento){
               $AtividadeUser = new ActivityUser();
        $AtividadeUser->id_users = Auth::user()->id;
        $retorno=$AtividadeUser->lista_de_atividade($id_evento);
        $eventos= new Event();
        $evento=$eventos->lista_de_evento($id_evento);
        foreach($evento as $e){
            $status=$e->status;
            $nome=$e->nome;
        }
       foreach ($retorno as $r=>$a){
            if($a->presenca=='1')
            $tipos[]=["id"=>$a->id_activiUser,"tipo"=>$a->tipo_atividade_user ];
        }

               return view('atividade.minhas_atividade', compact('tipos','id_evento','status','nome'));

    }
    /** ------------------------------------------Inscrição de Atividade-------------------------------------------------------------------------
     */
    public function insc_atividade(Request $request)
    {
        date_default_timezone_set('America/Araguaina');

        $id_evento = $request->input('id_evento');
        $count=0;
       /* if($activities!=''){

            $teste=$atividadeUser->colisaoAtividade($id_evento);
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

        }*/
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
        $lista=$atividadeUser->listarFrequencia($id);
        $retorno=$atividadeUser->qtd($id);
        $qtd=0;
        foreach ($retorno as $a){
            if($a->cpf){
                $qtd++;
            }
        }
        $atividade=Activity::find($id);
        $qtdt=$atividade->qtd_inscritos-$qtd;
        if($qtdt == 0 ){
            $disponivel = 0;
        }else{
            $disponivel = 1;
        }
        $nomeAtividade=$atividade->nome;
         return view('atividade.frequencia_atividade', compact('lista','id_evento','id','nomeAtividade','disponivel','qtdt'));

    }

    public function pdf($id_evento,$id){
        $AtividadeUser = new ActivityUser();
        $AtividadeUser->id_users = Auth::user()->id;
        $retorno=$AtividadeUser->certificado($id_evento);
        $SOMA = date( "H:i:s", strtotime( '00:00:00' ) );;
        $atividade='';
        $atividade2='';
        $cont=0;
        $cont2=0;
        $SOMA2 = date( "H:i:s", strtotime( '00:00:00' ) );;
        foreach ($retorno as $r=>$a){
            if($a->presenca==1){
           if($a->qtdhoras){
            if($a->id_activiUser==$id){
               $SOMA = date( "H:i:s", strtotime("$SOMA +   ".date( 'H', strtotime( $a->qtdhoras ) )." hours".
               date( 'i', strtotime( $a->qtdhoras ) )." minute ".date( 's', strtotime( $a->qtdhoras ) )."second") );
                $atividade= $atividade.", ".$a->atividade;

                $cont++;
           }else{
                $SOMA2 = date( "H:i:s", strtotime("$SOMA2 +   ".date( 'H', strtotime( $a->qtdhoras ) )." hours".
                    date( 'i', strtotime( $a->qtdhoras ) )." minute ".date( 's', strtotime( $a->qtdhoras ) )."second") );
                $atividade2= $atividade2.", ".$a->atividade;

                $cont2++;
            }
            $cpf=$a->evento;
            $certificado['0']=$a;

           }

            }

        }
        $tipos= new TypeActivityUser();
        $temporaria=$tipos->lista_de_tipo($id);
        foreach($temporaria as $e){
            $tipo=$e->nome;

        }
         $codigo=str_pad($id_evento,2,0,STR_PAD_LEFT);
        $codigo=$codigo.$cpf.str_pad(Auth::user()->id,4,0,STR_PAD_LEFT);

        if($cont2<0){
            $pdf = \PDF::loadView('certificado.pdf',compact('certificado','SOMA2','atividade2','codigo','tipo'))->setPaper('a4', 'landscape');
            return $pdf->stream('meucertificado.pdf');

            if($cont<0){
                return redirect('/');
            }
        }else{
            $pdf = \PDF::loadView('certificado.pdf',compact('certificado','SOMA','atividade','codigo','tipo'))->setPaper('a4', 'landscape');
            return $pdf->stream('meucertificado.pdf');

        }
            //}
    }
    public function add_inscricao($id_evento,$id){
        $tipo=TypeActivityUser::all();
        $atividadeUser = new UserEvent();
        $lista=$atividadeUser->lista_de_userEvento($id_evento);
        return view('atividade.inscricao_atividade', compact('lista','id_evento','id','tipo'));


    }
    public function add_insc_atividade(Request $request,$id,$id_evento)
    {
        date_default_timezone_set('America/Araguaina');


        $count=0;
        /* if($activities!=''){

             $teste=$atividadeUser->colisaoAtividade($id_evento);
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

         }*/
            $AtividadeUser = new ActivityUser();
            $AtividadeUser->id_users = $request->input('id_user');
            $AtividadeUser->id_activity = $id;
            $AtividadeUser->id_type_activity_user = $request->input('id_tipo_user');
            $AtividadeUser->status = 1;
            $AtividadeUser->data_entrada =Date('Y-m-d H:i:s');
            $AtividadeUser->data_saida = Date('Y-m-d H:i:s');
            $AtividadeUser->presenca = 0;
            if ($AtividadeUser->valida()) {
                $AtividadeUser->save();
                $count++;
            }

        if($count>0){
            return redirect('evento/'.$id_evento.'/atividade/'.$id.'/frequencia');
        }else{
            return redirect('evento/'.$id_evento.'/atividade/'.$id.'/frequencia');
        }
    }



}
