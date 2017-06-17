<?php

namespace App\Http\Controllers;

use App\Entities\TypeActivity;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\TypeActivityCreateRequest;
use App\Http\Requests\TypeActivityUpdateRequest;
use App\Repositories\TypeActivityRepository;
use App\Validators\TypeActivityValidator;


class TypeActivitiesController extends Controller
{
    /** ------------------------------------------Import repository Tipo Atividade-------------------------------------------------------------------------
     */
    protected $repository;
    /** ------------------------------------------Import validator Tipo Atividade-------------------------------------------------------------------------
     */
    protected $validator;
    /** ------------------------------------------Construct-------------------------------------------------------------------------
     */

    public function __construct(TypeActivityRepository $repository, TypeActivityValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }
    /** ------------------------------------------Index-------------------------------------------------------------------------
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $typeActivities = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $typeActivities,
            ]);
        }

        return view('tipo_de_atividade.list_tipo_de_atividade', compact('typeActivities'));
    }

    /** ------------------------------------------Store-------------------------------------------------------------------------
     */
    public function store(Request $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $typeActivity = $this->repository->create($request->all());

            $response = [
                'message' => 'TypeActivity created.',
                'data'    => $typeActivity->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('atividade/tipo/index');
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
        $typeActivity = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $typeActivity,
            ]);
        }

        return view('typeActivities.show', compact('typeActivity'));
    }
    /** ------------------------------------------Edit-------------------------------------------------------------------------
     */
    public function edit($id)
    {
        $titulo = "Editar Tipo de Atividade";

        $typeActivity = $this->repository->find($id);

//        return view('typeActivities.edit', compact('typeActivity'));
        return view('tipo_de_atividade.create-edit', compact('titulo','typeActivity'));
    }
    /** ------------------------------------------Update-------------------------------------------------------------------------
     */
    public function update(Request $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $typeActivity = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'TypeActivity updated.',
                'data'    => $typeActivity->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('atividade/tipo/index');
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
        $typeActivity = TypeActivity::find($id);
        $update = $typeActivity->update($dataForm);

        if($update){
            return redirect()->route('index_type_activity');
        }
    }
    /** ------------------------------------------Formulario de Cadastro-------------------------------------------------------------------------
     */
    public function form_cad()
    {
//        return view('tipo_de_atividade.cad_tipo_de_atividade');
        $titulo = "Cadastrar Tipo de Atividade";
        return view('tipo_de_atividade.create-edit', compact('titulo'));
    }
}
