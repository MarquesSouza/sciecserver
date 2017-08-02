<?php

namespace App\Http\Controllers;

use App\Entities\TypeUser;
use App\Entities\User;
use App\Entities\UserEvent;
use App\Entities\UserTypeUser;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;


class UsersController extends Controller
{

    /** ------------------------------------------Import repository  Usuario-------------------------------------------------------------------------
     */
    protected $repository;
    /** ------------------------------------------Import validator Usuario-------------------------------------------------------------------------
     */
    protected $validator;
    /** ------------------------------------------Construct-------------------------------------------------------------------------
     */
    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }
    /** ------------------------------------------Index-------------------------------------------------------------------------
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $users = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $users,
            ]);
        }

        return view('usuario.list_usuario', compact('users'));
    }

    /** ------------------------------------------Store-------------------------------------------------------------------------
     */
    public function store(Request $request)
    {
        $tipoUser=$request->input('id_tipo');
        unset($request['id_tipo']);

        try {


            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);
            $request['password']= bcrypt($request->input('password'));
            $user = $this->repository->create($request->all());

            $response = [
                'message' => 'User created.',
                'data'    => $user->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            $user->id;
            $tipo=new UserTypeUser();
            $tipo->status=1;
            $tipo->id_user=$user->id;
            $tipo->id_type_user=$tipoUser;
            if($tipo->validaUser()){
            $tipo->save();
            }
            echo $tipoUser;
            return redirect('usuario/index');
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
        $user = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $user,
            ]);
        }

        return view('users.show', compact('user'));
    }
    /** ------------------------------------------Edit-------------------------------------------------------------------------
     */
    public function edit($id)
    {

        $titulo = "Editar Usuario";
        $tipo=TypeUser::all();
        $users = $this->repository->find($id);
        return view('usuario.create-edit-user', compact('titulo','users', 'tipo'));

    }
    /** ------------------------------------------Update-------------------------------------------------------------------------
     */
    public function update(Request $request, $id)
    {
        $tipoUser=$request->input('id_tipo');
        unset($request['id_tipo']);
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $request['password']= bcrypt($request->input('password'));
            $user = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'User updated.',
                'data'    => $user->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }
            $user->id;
            $tipo=new UserTypeUser();
            $tipo->status=1;
            $tipo->id_user=$user->id;
            $tipo->id_type_user=$tipoUser;
            if($tipo->validaUser()){
                $tipo->save();
            }
            return redirect('/');
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
        $user = User::find($id);
        $update = $user->update($dataForm);

        if($update){
            return redirect('usuario/index');
        }
    }
    /** ------------------------------------------Formulario Cadastro-------------------------------------------------------------------------
     */
    public function form_cad()
    {
        $tipo=TypeUser::all();
        $titulo= "Cadastra Usuarios";
        return view('usuario.create-edit-user',compact('titulo','tipo'));
    }
    /** ------------------------------------------Certificados-------------------------------------------------------------------------
     */
    public function cad_certificado()
    {
        $titulo="Cadastro de Certificados";
        return view('certificado.create-edit-certificado', compact('titulo'));
    }

    public function certificado()
    {
        return view('certificado.exibir_certificado', compact('certificado'));
    }
    /** ------------------------------------------Controle de Frequencia-------------------------------------------------------------------------
     */
    public function frequencia()
    {
        return view('frequencia.controle_frequencia', compact('frequencia'));
    }
    public function alterar()
    {

        $titulo = "Editar Usuario";
        $tipo=TypeUser::all();
        $users = $this->repository->find(Auth::user()->id);
        return view('usuario.update', compact('titulo','users', 'tipo'));

    }
}
