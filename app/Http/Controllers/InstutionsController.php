<?php

namespace App\Http\Controllers;

use App\Entities\Instution;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\InstutionCreateRequest;
use App\Http\Requests\InstutionUpdateRequest;
use App\Repositories\InstutionRepository;
use App\Validators\InstutionValidator;


class InstutionsController extends Controller
{

    /** ------------------------------------------Import repository Instutions-------------------------------------------------------------------------
     */
    protected $repository;
    /** ------------------------------------------Import validator Instutions-------------------------------------------------------------------------
     */
    protected $validator;
    /** ------------------------------------------Construct-------------------------------------------------------------------------
     */
    public function __construct(InstutionRepository $repository, InstutionValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }
    /** ------------------------------------------Index-------------------------------------------------------------------------
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $instutions = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $instutions,
            ]);
        }

        return view('instituicao.list_instituicao',  compact('instutions'));
    }

    /** ------------------------------------------Store-------------------------------------------------------------------------
     */
    public function store(Request $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $instution = $this->repository->create($request->all());

            $response = [
                'message' => 'Instutions created.',
                'data'    => $instution->toArray(),
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
        $instution = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $instution,
            ]);
        }

        return view('instutions.show', compact('instution'));
    }
    /** ------------------------------------------Edit-------------------------------------------------------------------------
     */
    public function edit($id)
    {
        $titulo = "Editar Instituiçao";


        $instutions = $this->repository->find($id);

        return view('instituicao.create-edit', compact('titulo','instutions'));
    }
    /** ------------------------------------------Update-------------------------------------------------------------------------
     */
    public function update(Request $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $instution = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Instutions updated.',
                'data'    => $instution->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->route('index');
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
      $instituicao = Instution::find($id);
      $update = $instituicao->update($dataForm);

      if($update){
          return redirect()->route('index');
      }
    }
    /** ------------------------------------------Formulario de Cadastro-------------------------------------------------------------------------
     */
    public function form_cad()
    {
        $titulo = "Cadastrar Instituiçao";
        return view('instituicao.create-edit', compact('titulo'));
    }
}
