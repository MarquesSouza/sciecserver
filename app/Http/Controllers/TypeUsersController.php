<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\TypeUserCreateRequest;
use App\Http\Requests\TypeUserUpdateRequest;
use App\Repositories\TypeUserRepository;
use App\Validators\TypeUserValidator;


class TypeUsersController extends Controller
{

    /** ------------------------------------------Import repository Tipo de Usuario-------------------------------------------------------------------------
     */
    protected $repository;
    /** ------------------------------------------Import validator Tipo  de Usuario-------------------------------------------------------------------------
     */
    protected $validator;
    /** ------------------------------------------Construct-------------------------------------------------------------------------
     */
    public function __construct(TypeUserRepository $repository, TypeUserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }
    /** ------------------------------------------Index-------------------------------------------------------------------------
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $typeUsers = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $typeUsers,
            ]);
        }

        return view('tipo_de_usuario.list_tipo_de_usuario', compact('typeUsers'));
    }

    /** ------------------------------------------Store-------------------------------------------------------------------------
     */
    public function store(Request $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $typeUser = $this->repository->create($request->all());

            $response = [
                'message' => 'TypeUser created.',
                'data'    => $typeUser->toArray(),
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
        $typeUser = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $typeUser,
            ]);
        }

        return view('typeUsers.show', compact('typeUser'));
    }
    /** ------------------------------------------Edit-------------------------------------------------------------------------
     */
    public function edit($id)
    {

        $typeUser = $this->repository->find($id);

        return view('typeUsers.edit', compact('typeUser'));
    }
    /** ------------------------------------------Update-------------------------------------------------------------------------
     */
    public function update(TypeUserUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $typeUser = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'TypeUser updated.',
                'data'    => $typeUser->toArray(),
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
                'message' => 'TypeUser deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'TypeUser deleted.');
    }
    /** ------------------------------------------Formulario Casdastro-------------------------------------------------------------------------
     */
    public function form_cad()
    {
        return view('tipo_de_usuario.cad_tipo_de_usuario');
    }
}
