<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\TypeActivityUserCreateRequest;
use App\Http\Requests\TypeActivityUserUpdateRequest;
use App\Repositories\TypeActivityUserRepository;
use App\Validators\TypeActivityUserValidator;


class TypeActivityUsersController extends Controller
{

    /** ------------------------------------------Import repository Tipo Atividade de Usuario-------------------------------------------------------------------------
     */
    protected $repository;
    /** ------------------------------------------Import validator Tipo Atividade de Usuario-------------------------------------------------------------------------
     */
    protected $validator;
    /** ------------------------------------------Construct-------------------------------------------------------------------------
     */
    public function __construct(TypeActivityUserRepository $repository, TypeActivityUserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }
    /** ------------------------------------------Index-------------------------------------------------------------------------
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $typeActivityUsers = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $typeActivityUsers,
            ]);
        }

        return view('tipo_de_atividade_de_usuario.list_tipo_de_atividade_de_usuario', compact('typeActivityUsers'));
    }

    /** ------------------------------------------Store-------------------------------------------------------------------------
     */
    public function store(Request $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $typeActivityUser = $this->repository->create($request->all());

            $response = [
                'message' => 'TypeActivityUser created.',
                'data'    => $typeActivityUser->toArray(),
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
        $typeActivityUser = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $typeActivityUser,
            ]);
        }

        return view('typeActivityUsers.show', compact('typeActivityUser'));
    }
    /** ------------------------------------------Edit-------------------------------------------------------------------------
     */
    public function edit($id)
    {

        $typeActivityUser = $this->repository->find($id);

        return view('typeActivityUsers.edit', compact('typeActivityUser'));
    }
    /** ------------------------------------------Update-------------------------------------------------------------------------
     */
    public function update(TypeActivityUserUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $typeActivityUser = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'TypeActivityUser updated.',
                'data'    => $typeActivityUser->toArray(),
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
    /** ------------------------------------------Destroy-------------------------------------------------------------------------
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'TypeActivityUser deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'TypeActivityUser deleted.');
    }
    /** ------------------------------------------Formulario Cadastro-------------------------------------------------------------------------
     */
    public function form_cad()
    {
        return view('tipo_de_atividade_de_usuario.cad_tipo_de_atividade_de_usuario');
    }
}
